# Plans


## Get Subscribe for a plan.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/plans/subscribe" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"plan_id":"tenetur"}'

```

```javascript
const url = new URL(
    "http://localhost/api/plans/subscribe"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "plan_id": "tenetur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-plans-subscribe" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-plans-subscribe"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-plans-subscribe"></code></pre>
</div>
<div id="execution-error-POSTapi-plans-subscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-plans-subscribe"></code></pre>
</div>
<form id="form-POSTapi-plans-subscribe" data-method="POST" data-path="api/plans/subscribe" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-plans-subscribe', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-plans-subscribe" onclick="tryItOut('POSTapi-plans-subscribe');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-plans-subscribe" onclick="cancelTryOut('POSTapi-plans-subscribe');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-plans-subscribe" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/plans/subscribe</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>plan_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="plan_id" data-endpoint="POSTapi-plans-subscribe" data-component="body" required  hidden>
<br>
</p>

</form>


## Create Plans (Less Params).




> Example request:

```bash
curl -X POST \
    "http://localhost/api/plans/createPlan" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"slug":"unde","name":"et","price":36381727.3,"invoice_period":14,"invoice_interval":"hour","active_subscribers_limit":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/plans/createPlan"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "slug": "unde",
    "name": "et",
    "price": 36381727.3,
    "invoice_period": 14,
    "invoice_interval": "hour",
    "active_subscribers_limit": 7
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-plans-createPlan" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-plans-createPlan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-plans-createPlan"></code></pre>
</div>
<div id="execution-error-POSTapi-plans-createPlan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-plans-createPlan"></code></pre>
</div>
<form id="form-POSTapi-plans-createPlan" data-method="POST" data-path="api/plans/createPlan" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-plans-createPlan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-plans-createPlan" onclick="tryItOut('POSTapi-plans-createPlan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-plans-createPlan" onclick="cancelTryOut('POSTapi-plans-createPlan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-plans-createPlan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/plans/createPlan</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="POSTapi-plans-createPlan" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-plans-createPlan" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="price" data-endpoint="POSTapi-plans-createPlan" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>invoice_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="invoice_period" data-endpoint="POSTapi-plans-createPlan" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>invoice_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="invoice_interval" data-endpoint="POSTapi-plans-createPlan" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>active_subscribers_limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="active_subscribers_limit" data-endpoint="POSTapi-plans-createPlan" data-component="body"  hidden>
<br>
</p>

</form>


## Get Current plan user is subscribed to.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/plans/currentPlan" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/plans/currentPlan"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```
<div id="execution-results-GETapi-plans-currentPlan" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-plans-currentPlan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-plans-currentPlan"></code></pre>
</div>
<div id="execution-error-GETapi-plans-currentPlan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-plans-currentPlan"></code></pre>
</div>
<form id="form-GETapi-plans-currentPlan" data-method="GET" data-path="api/plans/currentPlan" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-plans-currentPlan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-plans-currentPlan" onclick="tryItOut('GETapi-plans-currentPlan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-plans-currentPlan" onclick="cancelTryOut('GETapi-plans-currentPlan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-plans-currentPlan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/plans/currentPlan</code></b>
</p>
</form>


## Display a listing of the Plans.


GET|HEAD /plans

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/plans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/plans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```
<div id="execution-results-GETapi-plans" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-plans"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-plans"></code></pre>
</div>
<div id="execution-error-GETapi-plans" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-plans"></code></pre>
</div>
<form id="form-GETapi-plans" data-method="GET" data-path="api/plans" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-plans', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-plans" onclick="tryItOut('GETapi-plans');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-plans" onclick="cancelTryOut('GETapi-plans');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-plans" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/plans</code></b>
</p>
</form>


## Store a newly created Plans in storage.


POST /plans

> Example request:

```bash
curl -X POST \
    "http://localhost/api/plans" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"slug":"ipsam","name":"sit","description":"voluptates","is_active":false,"price":505.03224,"signup_fee":124.16164,"currency":"voluptas","trial_period":12,"trial_interval":"day","invoice_period":3,"invoice_interval":"hour","grace_period":20,"grace_interval":"month","sort_order":12,"prorate_day":3,"prorate_period":7,"prorate_extend_due":12,"active_subscribers_limit":13}'

```

```javascript
const url = new URL(
    "http://localhost/api/plans"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "slug": "ipsam",
    "name": "sit",
    "description": "voluptates",
    "is_active": false,
    "price": 505.03224,
    "signup_fee": 124.16164,
    "currency": "voluptas",
    "trial_period": 12,
    "trial_interval": "day",
    "invoice_period": 3,
    "invoice_interval": "hour",
    "grace_period": 20,
    "grace_interval": "month",
    "sort_order": 12,
    "prorate_day": 3,
    "prorate_period": 7,
    "prorate_extend_due": 12,
    "active_subscribers_limit": 13
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-plans" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-plans"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-plans"></code></pre>
</div>
<div id="execution-error-POSTapi-plans" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-plans"></code></pre>
</div>
<form id="form-POSTapi-plans" data-method="POST" data-path="api/plans" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-plans', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-plans" onclick="tryItOut('POSTapi-plans');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-plans" onclick="cancelTryOut('POSTapi-plans');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-plans" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/plans</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="POSTapi-plans" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-plans" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-plans" hidden><input type="radio" name="is_active" value="true" data-endpoint="POSTapi-plans" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-plans" hidden><input type="radio" name="is_active" value="false" data-endpoint="POSTapi-plans" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="price" data-endpoint="POSTapi-plans" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>signup_fee</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="signup_fee" data-endpoint="POSTapi-plans" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>currency</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="currency" data-endpoint="POSTapi-plans" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>trial_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="trial_period" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>trial_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="trial_interval" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>invoice_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="invoice_period" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>invoice_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="invoice_interval" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>grace_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="grace_period" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>grace_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="grace_interval" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>sort_order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="sort_order" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_day</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_day" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_period" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_extend_due</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_extend_due" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>active_subscribers_limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="active_subscribers_limit" data-endpoint="POSTapi-plans" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Plans.


GET|HEAD /plans/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/plans/nesciunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/plans/nesciunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
}
```
<div id="execution-results-GETapi-plans--plan-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-plans--plan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-plans--plan-"></code></pre>
</div>
<div id="execution-error-GETapi-plans--plan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-plans--plan-"></code></pre>
</div>
<form id="form-GETapi-plans--plan-" data-method="GET" data-path="api/plans/{plan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-plans--plan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-plans--plan-" onclick="tryItOut('GETapi-plans--plan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-plans--plan-" onclick="cancelTryOut('GETapi-plans--plan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-plans--plan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/plans/{plan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>plan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="plan" data-endpoint="GETapi-plans--plan-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Plans in storage.


PUT/PATCH /plans/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/plans/alias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"slug":"consequatur","name":"rerum","description":"totam","is_active":false,"price":463057.9961,"signup_fee":21169645.1,"currency":"qui","trial_period":2,"trial_interval":"month","invoice_period":4,"invoice_interval":"day","grace_period":19,"grace_interval":"day","sort_order":4,"prorate_day":7,"prorate_period":15,"prorate_extend_due":2,"active_subscribers_limit":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/plans/alias"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "slug": "consequatur",
    "name": "rerum",
    "description": "totam",
    "is_active": false,
    "price": 463057.9961,
    "signup_fee": 21169645.1,
    "currency": "qui",
    "trial_period": 2,
    "trial_interval": "month",
    "invoice_period": 4,
    "invoice_interval": "day",
    "grace_period": 19,
    "grace_interval": "day",
    "sort_order": 4,
    "prorate_day": 7,
    "prorate_period": 15,
    "prorate_extend_due": 2,
    "active_subscribers_limit": 17
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-plans--plan-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-plans--plan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-plans--plan-"></code></pre>
</div>
<div id="execution-error-PUTapi-plans--plan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-plans--plan-"></code></pre>
</div>
<form id="form-PUTapi-plans--plan-" data-method="PUT" data-path="api/plans/{plan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-plans--plan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-plans--plan-" onclick="tryItOut('PUTapi-plans--plan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-plans--plan-" onclick="cancelTryOut('PUTapi-plans--plan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-plans--plan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/plans/{plan}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/plans/{plan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>plan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="plan" data-endpoint="PUTapi-plans--plan-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>slug</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="slug" data-endpoint="PUTapi-plans--plan-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-plans--plan-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>is_active</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-plans--plan-" hidden><input type="radio" name="is_active" value="true" data-endpoint="PUTapi-plans--plan-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-plans--plan-" hidden><input type="radio" name="is_active" value="false" data-endpoint="PUTapi-plans--plan-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>price</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="price" data-endpoint="PUTapi-plans--plan-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>signup_fee</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="signup_fee" data-endpoint="PUTapi-plans--plan-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>currency</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="currency" data-endpoint="PUTapi-plans--plan-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>trial_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="trial_period" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>trial_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="trial_interval" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>invoice_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="invoice_period" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>invoice_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="invoice_interval" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>grace_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="grace_period" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>grace_interval</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="grace_interval" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
The value must be one of <code>hour</code>, <code>day</code>, <code>week</code>, or <code>month</code>.</p>
<p>
<b><code>sort_order</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="sort_order" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_day</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_day" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_period</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_period" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>prorate_extend_due</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="prorate_extend_due" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>active_subscribers_limit</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="active_subscribers_limit" data-endpoint="PUTapi-plans--plan-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Plans from storage.


DELETE /plans/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/plans/quis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/plans/quis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-plans--plan-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-plans--plan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-plans--plan-"></code></pre>
</div>
<div id="execution-error-DELETEapi-plans--plan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-plans--plan-"></code></pre>
</div>
<form id="form-DELETEapi-plans--plan-" data-method="DELETE" data-path="api/plans/{plan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-plans--plan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-plans--plan-" onclick="tryItOut('DELETEapi-plans--plan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-plans--plan-" onclick="cancelTryOut('DELETEapi-plans--plan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-plans--plan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/plans/{plan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>plan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="plan" data-endpoint="DELETEapi-plans--plan-" data-component="url" required  hidden>
<br>
</p>
</form>



