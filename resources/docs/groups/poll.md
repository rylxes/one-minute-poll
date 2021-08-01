# Poll


## By Branch.




> Example request:

```bash
curl -X POST \
    "http://poll.loc/api/polls/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"alias"}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/polls/search"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "alias"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-polls-search" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-polls-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-polls-search"></code></pre>
</div>
<div id="execution-error-POSTapi-polls-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-polls-search"></code></pre>
</div>
<form id="form-POSTapi-polls-search" data-method="POST" data-path="api/polls/search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-polls-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-polls-search" onclick="tryItOut('POSTapi-polls-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-polls-search" onclick="cancelTryOut('POSTapi-polls-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-polls-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/polls/search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-polls-search" data-component="body" required  hidden>
<br>

</p>

</form>


## api/polls/mine




> Example request:

```bash
curl -X POST \
    "http://poll.loc/api/polls/mine" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/polls/mine"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-polls-mine" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-polls-mine"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-polls-mine"></code></pre>
</div>
<div id="execution-error-POSTapi-polls-mine" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-polls-mine"></code></pre>
</div>
<form id="form-POSTapi-polls-mine" data-method="POST" data-path="api/polls/mine" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-polls-mine', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-polls-mine" onclick="tryItOut('POSTapi-polls-mine');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-polls-mine" onclick="cancelTryOut('POSTapi-polls-mine');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-polls-mine" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/polls/mine</code></b>
</p>
</form>


## Display a listing of the Poll.


GET|HEAD /polls

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/polls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/polls"
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


> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "counters": null,
            "title": "A_E",
            "user": null,
            "pollOptions": [
                {
                    "id": 1,
                    "poll_id": 1,
                    "name": "A",
                    "value": "qq",
                    "count": 0,
                    "created_at": "2021-07-31T23:22:12.000000Z",
                    "updated_at": "2021-07-31T23:22:12.000000Z",
                    "vote_value_id": 8
                },
                {
                    "id": 2,
                    "poll_id": 1,
                    "name": "B",
                    "value": "ww",
                    "count": 0,
                    "created_at": "2021-07-31T23:22:12.000000Z",
                    "updated_at": "2021-07-31T23:22:12.000000Z",
                    "vote_value_id": 9
                },
                {
                    "id": 3,
                    "poll_id": 1,
                    "name": "C",
                    "value": "ee",
                    "count": 0,
                    "created_at": "2021-07-31T23:22:12.000000Z",
                    "updated_at": "2021-07-31T23:22:12.000000Z",
                    "vote_value_id": 10
                },
                {
                    "id": 4,
                    "poll_id": 1,
                    "name": "D",
                    "value": "bb",
                    "count": 0,
                    "created_at": "2021-07-31T23:22:12.000000Z",
                    "updated_at": "2021-07-31T23:22:12.000000Z",
                    "vote_value_id": 11
                }
            ],
            "votes": null,
            "pollValue": null,
            "pollType": {
                "id": 3,
                "name": "A - E Options",
                "created_at": null,
                "updated_at": null,
                "value_vote": [
                    {
                        "id": 8,
                        "poll_type_id": 3,
                        "name": "A",
                        "value": "A",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 9,
                        "poll_type_id": 3,
                        "name": "B",
                        "value": "B",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 10,
                        "poll_type_id": 3,
                        "name": "C",
                        "value": "C",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 11,
                        "poll_type_id": 3,
                        "name": "D",
                        "value": "D",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 12,
                        "poll_type_id": 3,
                        "name": "E",
                        "value": "E",
                        "created_at": null,
                        "updated_at": null
                    }
                ]
            },
            "valueVote": [
                {
                    "id": 8,
                    "poll_type_id": 3,
                    "name": "A",
                    "value": "A",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 9,
                    "poll_type_id": 3,
                    "name": "B",
                    "value": "B",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 10,
                    "poll_type_id": 3,
                    "name": "C",
                    "value": "C",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 11,
                    "poll_type_id": 3,
                    "name": "D",
                    "value": "D",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 12,
                    "poll_type_id": 3,
                    "name": "E",
                    "value": "E",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "url": "http:\/\/poll.loc\/storage\/15\/ac62631a-15f3-4b2f-8fc4-7769353b76e8.jpeg",
            "code": "QC9LQ18HX9",
            "category": {
                "id": 1,
                "name": "General Opinion",
                "created_at": null,
                "updated_at": null
            },
            "user_id": null,
            "poll_type_id": 3,
            "open_to_everyone": 0,
            "question": "A_E",
            "close_date": "2021-08-01T00:00:00.000000Z",
            "created_at": "2021-07-31T23:22:12.000000Z",
            "updated_at": "2021-07-31T23:22:12.000000Z"
        },
        {
            "id": 2,
            "counters": null,
            "title": "Star",
            "user": null,
            "pollOptions": [],
            "votes": null,
            "pollValue": null,
            "pollType": {
                "id": 2,
                "name": "1 - 5 Stars",
                "created_at": null,
                "updated_at": null,
                "value_vote": [
                    {
                        "id": 3,
                        "poll_type_id": 2,
                        "name": "1",
                        "value": "1",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 4,
                        "poll_type_id": 2,
                        "name": "2",
                        "value": "2",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 5,
                        "poll_type_id": 2,
                        "name": "3",
                        "value": "3",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 6,
                        "poll_type_id": 2,
                        "name": "4",
                        "value": "4",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 7,
                        "poll_type_id": 2,
                        "name": "5",
                        "value": "5",
                        "created_at": null,
                        "updated_at": null
                    }
                ]
            },
            "valueVote": [
                {
                    "id": 3,
                    "poll_type_id": 2,
                    "name": "1",
                    "value": "1",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "poll_type_id": 2,
                    "name": "2",
                    "value": "2",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "poll_type_id": 2,
                    "name": "3",
                    "value": "3",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 6,
                    "poll_type_id": 2,
                    "name": "4",
                    "value": "4",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 7,
                    "poll_type_id": 2,
                    "name": "5",
                    "value": "5",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "url": "http:\/\/poll.loc\/storage\/16\/3cb60f8a-424f-4dd8-89b6-61720b48a248.png",
            "code": "7K9XXT832L",
            "category": {
                "id": 3,
                "name": "Politics",
                "created_at": null,
                "updated_at": null
            },
            "user_id": null,
            "poll_type_id": 2,
            "open_to_everyone": 1,
            "question": "Star",
            "close_date": "2021-08-01T00:00:00.000000Z",
            "created_at": "2021-07-31T23:24:55.000000Z",
            "updated_at": "2021-07-31T23:24:55.000000Z"
        },
        {
            "id": 3,
            "counters": null,
            "title": "111",
            "user": null,
            "pollOptions": [],
            "votes": null,
            "pollValue": null,
            "pollType": {
                "id": 2,
                "name": "1 - 5 Stars",
                "created_at": null,
                "updated_at": null,
                "value_vote": [
                    {
                        "id": 3,
                        "poll_type_id": 2,
                        "name": "1",
                        "value": "1",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 4,
                        "poll_type_id": 2,
                        "name": "2",
                        "value": "2",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 5,
                        "poll_type_id": 2,
                        "name": "3",
                        "value": "3",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 6,
                        "poll_type_id": 2,
                        "name": "4",
                        "value": "4",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 7,
                        "poll_type_id": 2,
                        "name": "5",
                        "value": "5",
                        "created_at": null,
                        "updated_at": null
                    }
                ]
            },
            "valueVote": [
                {
                    "id": 3,
                    "poll_type_id": 2,
                    "name": "1",
                    "value": "1",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "poll_type_id": 2,
                    "name": "2",
                    "value": "2",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "poll_type_id": 2,
                    "name": "3",
                    "value": "3",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 6,
                    "poll_type_id": 2,
                    "name": "4",
                    "value": "4",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 7,
                    "poll_type_id": 2,
                    "name": "5",
                    "value": "5",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "url": "http:\/\/poll.loc\/storage\/17\/ddf84dcd-2811-41ef-bc19-28db621a1b57.jpeg",
            "code": "2WY4VPEV1L",
            "category": {
                "id": 4,
                "name": "Entertainment",
                "created_at": null,
                "updated_at": null
            },
            "user_id": null,
            "poll_type_id": 2,
            "open_to_everyone": 1,
            "question": "111",
            "close_date": "2021-08-02T00:00:00.000000Z",
            "created_at": "2021-07-31T23:26:00.000000Z",
            "updated_at": "2021-07-31T23:26:00.000000Z"
        },
        {
            "id": 4,
            "counters": null,
            "title": "222",
            "user": null,
            "pollOptions": [],
            "votes": null,
            "pollValue": null,
            "pollType": {
                "id": 2,
                "name": "1 - 5 Stars",
                "created_at": null,
                "updated_at": null,
                "value_vote": [
                    {
                        "id": 3,
                        "poll_type_id": 2,
                        "name": "1",
                        "value": "1",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 4,
                        "poll_type_id": 2,
                        "name": "2",
                        "value": "2",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 5,
                        "poll_type_id": 2,
                        "name": "3",
                        "value": "3",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 6,
                        "poll_type_id": 2,
                        "name": "4",
                        "value": "4",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 7,
                        "poll_type_id": 2,
                        "name": "5",
                        "value": "5",
                        "created_at": null,
                        "updated_at": null
                    }
                ]
            },
            "valueVote": [
                {
                    "id": 3,
                    "poll_type_id": 2,
                    "name": "1",
                    "value": "1",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "poll_type_id": 2,
                    "name": "2",
                    "value": "2",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "poll_type_id": 2,
                    "name": "3",
                    "value": "3",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 6,
                    "poll_type_id": 2,
                    "name": "4",
                    "value": "4",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 7,
                    "poll_type_id": 2,
                    "name": "5",
                    "value": "5",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "url": "http:\/\/poll.loc\/storage\/18\/6a5e55fa-a5e2-4b0f-aeef-fafa93f72961.jpeg",
            "code": "6TK26KEWVQ",
            "category": {
                "id": 4,
                "name": "Entertainment",
                "created_at": null,
                "updated_at": null
            },
            "user_id": null,
            "poll_type_id": 2,
            "open_to_everyone": 1,
            "question": "222",
            "close_date": "2021-08-02T00:00:00.000000Z",
            "created_at": "2021-07-31T23:26:44.000000Z",
            "updated_at": "2021-07-31T23:26:44.000000Z"
        },
        {
            "id": 8,
            "counters": {
                "counterable_id": 8,
                "counter_id": 1,
                "counterable_type": "App\\Models\\Poll",
                "value": 4,
                "id": 2
            },
            "title": "333",
            "user": null,
            "pollOptions": [
                {
                    "id": 5,
                    "poll_id": 8,
                    "name": "1",
                    "value": "1",
                    "count": 0,
                    "created_at": "2021-07-31T23:28:53.000000Z",
                    "updated_at": "2021-07-31T23:28:53.000000Z",
                    "vote_value_id": 3
                },
                {
                    "id": 6,
                    "poll_id": 8,
                    "name": "2",
                    "value": "2",
                    "count": 0,
                    "created_at": "2021-07-31T23:28:53.000000Z",
                    "updated_at": "2021-07-31T23:28:53.000000Z",
                    "vote_value_id": 4
                },
                {
                    "id": 7,
                    "poll_id": 8,
                    "name": "3",
                    "value": "3",
                    "count": 0,
                    "created_at": "2021-07-31T23:28:53.000000Z",
                    "updated_at": "2021-07-31T23:28:53.000000Z",
                    "vote_value_id": 5
                },
                {
                    "id": 8,
                    "poll_id": 8,
                    "name": "4",
                    "value": "4",
                    "count": 0,
                    "created_at": "2021-07-31T23:28:53.000000Z",
                    "updated_at": "2021-07-31T23:28:53.000000Z",
                    "vote_value_id": 6
                },
                {
                    "id": 9,
                    "poll_id": 8,
                    "name": "5",
                    "value": "5",
                    "count": 0,
                    "created_at": "2021-07-31T23:28:53.000000Z",
                    "updated_at": "2021-07-31T23:28:53.000000Z",
                    "vote_value_id": 7
                }
            ],
            "votes": {
                "id": 1,
                "poll_id": 8,
                "created_at": "2021-07-31T23:53:11.000000Z",
                "updated_at": "2021-07-31T23:53:11.000000Z",
                "uuid": "8b43136c-165b-4b05-8332-45b8b326ed0e",
                "user_id": null,
                "value": "3",
                "poll_value": null
            },
            "pollValue": null,
            "pollType": {
                "id": 2,
                "name": "1 - 5 Stars",
                "created_at": null,
                "updated_at": null,
                "value_vote": [
                    {
                        "id": 3,
                        "poll_type_id": 2,
                        "name": "1",
                        "value": "1",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 4,
                        "poll_type_id": 2,
                        "name": "2",
                        "value": "2",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 5,
                        "poll_type_id": 2,
                        "name": "3",
                        "value": "3",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 6,
                        "poll_type_id": 2,
                        "name": "4",
                        "value": "4",
                        "created_at": null,
                        "updated_at": null
                    },
                    {
                        "id": 7,
                        "poll_type_id": 2,
                        "name": "5",
                        "value": "5",
                        "created_at": null,
                        "updated_at": null
                    }
                ]
            },
            "valueVote": [
                {
                    "id": 3,
                    "poll_type_id": 2,
                    "name": "1",
                    "value": "1",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 4,
                    "poll_type_id": 2,
                    "name": "2",
                    "value": "2",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 5,
                    "poll_type_id": 2,
                    "name": "3",
                    "value": "3",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 6,
                    "poll_type_id": 2,
                    "name": "4",
                    "value": "4",
                    "created_at": null,
                    "updated_at": null
                },
                {
                    "id": 7,
                    "poll_type_id": 2,
                    "name": "5",
                    "value": "5",
                    "created_at": null,
                    "updated_at": null
                }
            ],
            "url": "http:\/\/poll.loc:82\/storage\/22\/cb22ff74-136d-413f-a9fa-182b803c6f06.jpeg",
            "code": "8X76N515LN",
            "category": {
                "id": 4,
                "name": "Entertainment",
                "created_at": null,
                "updated_at": null
            },
            "user_id": null,
            "poll_type_id": 2,
            "open_to_everyone": 1,
            "question": "333",
            "close_date": "2021-08-02T00:00:00.000000Z",
            "created_at": "2021-07-31T23:28:52.000000Z",
            "updated_at": "2021-07-31T23:28:53.000000Z"
        }
    ],
    "message": "Polls retrieved successfully"
}
```
<div id="execution-results-GETapi-polls" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-polls"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-polls"></code></pre>
</div>
<div id="execution-error-GETapi-polls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-polls"></code></pre>
</div>
<form id="form-GETapi-polls" data-method="GET" data-path="api/polls" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-polls', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-polls" onclick="tryItOut('GETapi-polls');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-polls" onclick="cancelTryOut('GETapi-polls');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-polls" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/polls</code></b>
</p>
</form>


## Store a newly created Poll in storage.


POST /polls

> Example request:

```bash
curl -X POST \
    "http://poll.loc/api/polls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"veritatis","options":{"A":"illum","B":"nostrum","C":"illo","D":"dolores","E":"unde"},"email":"yjacobson@example.org","category_id":15,"user_id":13,"poll_type_id":14,"open_to_everyone":"dolorem","question":"et","close_date":{}}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/polls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "veritatis",
    "options": {
        "A": "illum",
        "B": "nostrum",
        "C": "illo",
        "D": "dolores",
        "E": "unde"
    },
    "email": "yjacobson@example.org",
    "category_id": 15,
    "user_id": 13,
    "poll_type_id": 14,
    "open_to_everyone": "dolorem",
    "question": "et",
    "close_date": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-polls" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-polls"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-polls"></code></pre>
</div>
<div id="execution-error-POSTapi-polls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-polls"></code></pre>
</div>
<form id="form-POSTapi-polls" data-method="POST" data-path="api/polls" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-polls', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-polls" onclick="tryItOut('POSTapi-polls');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-polls" onclick="cancelTryOut('POSTapi-polls');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-polls" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/polls</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<details>
<summary>
<b><code>options</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>options.A</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="options.A" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>options.B</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="options.B" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>options.C</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="options.C" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>options.D</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="options.D" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>options.E</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="options.E" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
</details>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>open_to_everyone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="open_to_everyone" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>close_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="close_date" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified Poll.


GET|HEAD /polls/{id}

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/polls/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/polls/et"
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


> Example response (404):

```json
{
    "success": false,
    "message": "Poll not found"
}
```
<div id="execution-results-GETapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-GETapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-polls--poll-"></code></pre>
</div>
<form id="form-GETapi-polls--poll-" data-method="GET" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-polls--poll-" onclick="tryItOut('GETapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-polls--poll-" onclick="cancelTryOut('GETapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="GETapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified Poll in storage.


PUT/PATCH /polls/{id}

> Example request:

```bash
curl -X PUT \
    "http://poll.loc/api/polls/modi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"et","url":"voluptas","code":"voluptates","category_id":12,"user_id":10,"poll_type_id":15,"open_to_everyone":"eos","question":"blanditiis","close_date":{},"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/polls/modi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "et",
    "url": "voluptas",
    "code": "voluptates",
    "category_id": 12,
    "user_id": 10,
    "poll_type_id": 15,
    "open_to_everyone": "eos",
    "question": "blanditiis",
    "close_date": {},
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-PUTapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-polls--poll-"></code></pre>
</div>
<form id="form-PUTapi-polls--poll-" data-method="PUT" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-polls--poll-" onclick="tryItOut('PUTapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-polls--poll-" onclick="cancelTryOut('PUTapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="PUTapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="url" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>open_to_everyone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="open_to_everyone" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>close_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="close_date" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified Poll from storage.


DELETE /polls/{id}

> Example request:

```bash
curl -X DELETE \
    "http://poll.loc/api/polls/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/polls/quo"
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


<div id="execution-results-DELETEapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-DELETEapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-polls--poll-"></code></pre>
</div>
<form id="form-DELETEapi-polls--poll-" data-method="DELETE" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-polls--poll-" onclick="tryItOut('DELETEapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-polls--poll-" onclick="cancelTryOut('DELETEapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="DELETEapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
</form>



