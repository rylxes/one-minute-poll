# Vote


## Display a listing of the Vote.


GET|HEAD /votes

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/votes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/votes"
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
            "poll_id": 8,
            "unique_id": null,
            "poll_value_id": null,
            "created_at": "2021-07-31T23:53:11.000000Z",
            "updated_at": "2021-07-31T23:53:11.000000Z"
        },
        {
            "id": 2,
            "poll_id": 8,
            "unique_id": null,
            "poll_value_id": null,
            "created_at": "2021-07-31T23:53:16.000000Z",
            "updated_at": "2021-07-31T23:53:16.000000Z"
        },
        {
            "id": 3,
            "poll_id": 8,
            "unique_id": null,
            "poll_value_id": null,
            "created_at": "2021-07-31T23:53:20.000000Z",
            "updated_at": "2021-07-31T23:53:20.000000Z"
        },
        {
            "id": 4,
            "poll_id": 8,
            "unique_id": null,
            "poll_value_id": null,
            "created_at": "2021-07-31T23:53:25.000000Z",
            "updated_at": "2021-07-31T23:53:25.000000Z"
        }
    ],
    "message": "Votes retrieved successfully"
}
```
<div id="execution-results-GETapi-votes" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-votes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-votes"></code></pre>
</div>
<div id="execution-error-GETapi-votes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-votes"></code></pre>
</div>
<form id="form-GETapi-votes" data-method="GET" data-path="api/votes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-votes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-votes" onclick="tryItOut('GETapi-votes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-votes" onclick="cancelTryOut('GETapi-votes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-votes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/votes</code></b>
</p>
</form>


## Store a newly created Vote in storage.


POST /votes

> Example request:

```bash
curl -X POST \
    "http://poll.loc/api/votes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_id":"tenetur","uuid":"et","value":"quia"}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/votes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_id": "tenetur",
    "uuid": "et",
    "value": "quia"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-votes" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-votes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-votes"></code></pre>
</div>
<div id="execution-error-POSTapi-votes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-votes"></code></pre>
</div>
<form id="form-POSTapi-votes" data-method="POST" data-path="api/votes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-votes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-votes" onclick="tryItOut('POSTapi-votes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-votes" onclick="cancelTryOut('POSTapi-votes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-votes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/votes</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_id" data-endpoint="POSTapi-votes" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uuid" data-endpoint="POSTapi-votes" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="POSTapi-votes" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the specified Vote.


GET|HEAD /votes/{id}

> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/api/votes/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/votes/non"
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
    "message": "Vote not found"
}
```
<div id="execution-results-GETapi-votes--vote-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-votes--vote-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-votes--vote-"></code></pre>
</div>
<div id="execution-error-GETapi-votes--vote-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-votes--vote-"></code></pre>
</div>
<form id="form-GETapi-votes--vote-" data-method="GET" data-path="api/votes/{vote}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-votes--vote-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-votes--vote-" onclick="tryItOut('GETapi-votes--vote-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-votes--vote-" onclick="cancelTryOut('GETapi-votes--vote-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-votes--vote-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/votes/{vote}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote" data-endpoint="GETapi-votes--vote-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified Vote in storage.


PUT/PATCH /votes/{id}

> Example request:

```bash
curl -X PUT \
    "http://poll.loc/api/votes/perferendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_id":"aut","uuid":"dicta","value":"quo"}'

```

```javascript
const url = new URL(
    "http://poll.loc/api/votes/perferendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_id": "aut",
    "uuid": "dicta",
    "value": "quo"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-votes--vote-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-votes--vote-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-votes--vote-"></code></pre>
</div>
<div id="execution-error-PUTapi-votes--vote-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-votes--vote-"></code></pre>
</div>
<form id="form-PUTapi-votes--vote-" data-method="PUT" data-path="api/votes/{vote}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-votes--vote-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-votes--vote-" onclick="tryItOut('PUTapi-votes--vote-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-votes--vote-" onclick="cancelTryOut('PUTapi-votes--vote-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-votes--vote-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/votes/{vote}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/votes/{vote}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote" data-endpoint="PUTapi-votes--vote-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_id" data-endpoint="PUTapi-votes--vote-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="uuid" data-endpoint="PUTapi-votes--vote-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="PUTapi-votes--vote-" data-component="body" required  hidden>
<br>

</p>

</form>


## Remove the specified Vote from storage.


DELETE /votes/{id}

> Example request:

```bash
curl -X DELETE \
    "http://poll.loc/api/votes/a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/votes/a"
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


<div id="execution-results-DELETEapi-votes--vote-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-votes--vote-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-votes--vote-"></code></pre>
</div>
<div id="execution-error-DELETEapi-votes--vote-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-votes--vote-"></code></pre>
</div>
<form id="form-DELETEapi-votes--vote-" data-method="DELETE" data-path="api/votes/{vote}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-votes--vote-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-votes--vote-" onclick="tryItOut('DELETEapi-votes--vote-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-votes--vote-" onclick="cancelTryOut('DELETEapi-votes--vote-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-votes--vote-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/votes/{vote}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>vote</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vote" data-endpoint="DELETEapi-votes--vote-" data-component="url" required  hidden>
<br>

</p>
</form>



