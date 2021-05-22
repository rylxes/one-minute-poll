<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNewPlansAPIRequest;
use App\Http\Requests\API\CreatePlansAPIRequest;
use App\Http\Requests\API\PlanSubscribe;
use App\Http\Requests\API\UpdatePlansAPIRequest;
use App\Models\Plans;
use App\Models\User;
use App\Repositories\PlansRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\PlansResource;
use Illuminate\Support\Facades\Auth;
use Response;
use Rinvex\Subscriptions\Models\PlanSubscription;

/**
 * Class PlansController
 * @group Plans
 * @package App\Http\Controllers\API
 */
class PlansAPIController extends AppBaseController
{
    /** @var  PlansRepository */
    private $plansRepository;

    public function __construct(PlansRepository $plansRepo)
    {
        $this->plansRepository = $plansRepo;
    }

    /**
     * Display a listing of the Plans.
     * GET|HEAD /plans
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $plans = $this->plansRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(PlansResource::collection($plans), 'Plans retrieved successfully');
    }


    /**
     * Get Current plan user is subscribed to.
     */

    public function currentPlan()
    {
        $planSubscription = Auth::user()->subscribedPlans();
        return $this->sendResponse($planSubscription->toArray(), 'Plans');
    }

    /**
     * Get Subscribe for a plan.
     */

    public function subscribe(PlanSubscribe $request)
    {
        $input = $request->all();

        /** @var Plans $plans */
        $plans = $this->plansRepository->find($input['plan_id']);
        if (empty($plans)) {
            return $this->sendError('Plans not found');
        }
        $this->_subscribe(\auth()->user(), $plans);
        return $this->sendResponse([], 'Users subscribed to plan successfully');
    }


    function _subscribe(User $user, Plans $plan)
    {
        $planSubscription = $user->subscribedPlans()->first();
        if (!$planSubscription->isEmpty()) {
            if ($planSubscription->plan_id == $plan->id) {
                $user->subscription((string)$plan->name)->renew();
            } else {
                $planSubscription->changePlan($plan);
            }
        } else {
            $user->newSubscription((string)$plan->name, $plan);
        }
    }

    /**
     * Create Plans (Less Params).
     *
     */

    public function createPlan(CreateNewPlansAPIRequest $request)
    {
        $input = $request->all();
        $input['signup_fee'] = 0;
        $input['trial_period'] = 0;
        $input['grace_period'] = 1;
        $input['currency'] = 'NGN';
        $input['trial_interval'] = 'month';
        $input['grace_interval'] = 'month';
        $plans = $this->plansRepository->create($input);
        return $this->sendResponse(new PlansResource($plans), 'Plans saved successfully');
    }

    /**
     * Store a newly created Plans in storage.
     * POST /plans
     *
     * @param CreatePlansAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlansAPIRequest $request)
    {
        $input = $request->all();

        $plans = $this->plansRepository->create($input);

        return $this->sendResponse(new PlansResource($plans), 'Plans saved successfully');
    }

    /**
     * Display the specified Plans.
     * GET|HEAD /plans/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Plans $plans */
        $plans = $this->plansRepository->find($id);

        if (empty($plans)) {
            return $this->sendError('Plans not found');
        }

        return $this->sendResponse(new PlansResource($plans), 'Plans retrieved successfully');
    }

    /**
     * Update the specified Plans in storage.
     * PUT/PATCH /plans/{id}
     *
     * @param int $id
     * @param UpdatePlansAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlansAPIRequest $request)
    {
        $input = $request->all();

        /** @var Plans $plans */
        $plans = $this->plansRepository->find($id);

        if (empty($plans)) {
            return $this->sendError('Plans not found');
        }

        $plans = $this->plansRepository->update($input, $id);

        return $this->sendResponse(new PlansResource($plans), 'Plans updated successfully');
    }

    /**
     * Remove the specified Plans from storage.
     * DELETE /plans/{id}
     *
     * @param int $id
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function destroy($id)
    {
        /** @var Plans $plans */
        $plans = $this->plansRepository->find($id);

        if (empty($plans)) {
            return $this->sendError('Plans not found');
        }

        $plans->delete();

        return $this->sendSuccess('Plans deleted successfully');
    }
}
