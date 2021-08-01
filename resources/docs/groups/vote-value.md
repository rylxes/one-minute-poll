# Vote Value


## Display a listing of the VoteValue.


GET|HEAD /voteValues

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/vote_values" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/vote_values"
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
            "poll_type_id": 1,
            "name": "Yes",
            "value": "Yes",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "poll_type_id": 1,
            "name": "No",
            "value": "No",
            "created_at": null,
            "updated_at": null
        },
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
        },
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
    "message": "Vote Values retrieved successfully"
}
```
<div id="execution-results-GETapi-vote_values" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vote_values"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vote_values"></code></pre>
</div>
<div id="execution-error-GETapi-vote_values" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vote_values"></code></pre>
</div>
<form id="form-GETapi-vote_values" data-method="GET" data-path="api/vote_values" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vote_values', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vote_values" onclick="tryItOut('GETapi-vote_values');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vote_values" onclick="cancelTryOut('GETapi-vote_values');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vote_values" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vote_values</code></b>
</p>
</form>


## Store a newly created VoteValue in storage.


POST /voteValues

> Example request:

```bash
curl -X POST \
    "http://poll.loc/api/vote_values" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_type_id":5,"name":"repellendus","value":"sed","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/vote_values"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_type_id": 5,
    "name": "repellendus",
    "value": "sed",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-vote_values" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-vote_values"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-vote_values"></code></pre>
</div>
<div id="execution-error-POSTapi-vote_values" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-vote_values"></code></pre>
</div>
<form id="form-POSTapi-vote_values" data-method="POST" data-path="api/vote_values" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-vote_values', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-vote_values" onclick="tryItOut('POSTapi-vote_values');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-vote_values" onclick="cancelTryOut('POSTapi-vote_values');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-vote_values" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/vote_values</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="POSTapi-vote_values" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-vote_values" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="POSTapi-vote_values" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-vote_values" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-vote_values" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified VoteValue.


GET|HEAD /voteValues/{id}

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/vote_values/porro" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/vote_values/porro"
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
    "message": "Vote Value not found"
}
```
<div id="execution-results-GETapi-vote_values--vote_value-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vote_values--vote_value-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vote_values--vote_value-"></code></pre>
</div>
<div id="execution-error-GETapi-vote_values--vote_value-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vote_values--vote_value-"></code></pre>
</div>
<form id="form-GETapi-vote_values--vote_value-" data-method="GET" data-path="api/vote_values/{vote_value}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vote_values--vote_value-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vote_values--vote_value-" onclick="tryItOut('GETapi-vote_values--vote_value-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vote_values--vote_value-" onclick="cancelTryOut('GETapi-vote_values--vote_value-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vote_values--vote_value-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vote_values/{vote_value}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote_value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote_value" data-endpoint="GETapi-vote_values--vote_value-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified VoteValue in storage.


PUT/PATCH /voteValues/{id}

> Example request:

```bash
curl -X PUT \
    "http://poll.loc/api/vote_values/placeat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_type_id":5,"name":"molestiae","value":"est","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/vote_values/placeat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_type_id": 5,
    "name": "molestiae",
    "value": "est",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-vote_values--vote_value-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-vote_values--vote_value-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-vote_values--vote_value-"></code></pre>
</div>
<div id="execution-error-PUTapi-vote_values--vote_value-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-vote_values--vote_value-"></code></pre>
</div>
<form id="form-PUTapi-vote_values--vote_value-" data-method="PUT" data-path="api/vote_values/{vote_value}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-vote_values--vote_value-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-vote_values--vote_value-" onclick="tryItOut('PUTapi-vote_values--vote_value-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-vote_values--vote_value-" onclick="cancelTryOut('PUTapi-vote_values--vote_value-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-vote_values--vote_value-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/vote_values/{vote_value}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/vote_values/{vote_value}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote_value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote_value" data-endpoint="PUTapi-vote_values--vote_value-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="PUTapi-vote_values--vote_value-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-vote_values--vote_value-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="PUTapi-vote_values--vote_value-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-vote_values--vote_value-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-vote_values--vote_value-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified VoteValue from storage.


DELETE /voteValues/{id}

> Example request:

```bash
curl -X DELETE \
    "http://poll.loc/api/vote_values/explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/vote_values/explicabo"
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


<div id="execution-results-DELETEapi-vote_values--vote_value-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-vote_values--vote_value-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-vote_values--vote_value-"></code></pre>
</div>
<div id="execution-error-DELETEapi-vote_values--vote_value-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-vote_values--vote_value-"></code></pre>
</div>
<form id="form-DELETEapi-vote_values--vote_value-" data-method="DELETE" data-path="api/vote_values/{vote_value}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-vote_values--vote_value-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-vote_values--vote_value-" onclick="tryItOut('DELETEapi-vote_values--vote_value-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-vote_values--vote_value-" onclick="cancelTryOut('DELETEapi-vote_values--vote_value-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-vote_values--vote_value-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/vote_values/{vote_value}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote_value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote_value" data-endpoint="DELETEapi-vote_values--vote_value-" data-component="url" required  hidden>
<br>

</p>
</form>



