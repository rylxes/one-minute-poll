# Poll Type


## Display a listing of the PollType.


GET|HEAD /pollTypes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/poll_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_types"
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
            "name": "Yes \/ No",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "1 - 5 Stars",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "A - E Options",
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "Poll Types retrieved successfully"
}
```
<div id="execution-results-GETapi-poll_types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-poll_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-poll_types"></code></pre>
</div>
<div id="execution-error-GETapi-poll_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-poll_types"></code></pre>
</div>
<form id="form-GETapi-poll_types" data-method="GET" data-path="api/poll_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-poll_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-poll_types" onclick="tryItOut('GETapi-poll_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-poll_types" onclick="cancelTryOut('GETapi-poll_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-poll_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/poll_types</code></b>
</p>
</form>


## Store a newly created PollType in storage.


POST /pollTypes

> Example request:

```bash
curl -X POST \
    "http://localhost/api/poll_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"itaque","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/poll_types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "itaque",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-poll_types" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-poll_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-poll_types"></code></pre>
</div>
<div id="execution-error-POSTapi-poll_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-poll_types"></code></pre>
</div>
<form id="form-POSTapi-poll_types" data-method="POST" data-path="api/poll_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-poll_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-poll_types" onclick="tryItOut('POSTapi-poll_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-poll_types" onclick="cancelTryOut('POSTapi-poll_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-poll_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/poll_types</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-poll_types" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-poll_types" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-poll_types" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified PollType.


GET|HEAD /pollTypes/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/poll_types/maiores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_types/maiores"
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
    "message": "Poll Type not found"
}
```
<div id="execution-results-GETapi-poll_types--poll_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-poll_types--poll_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-poll_types--poll_type-"></code></pre>
</div>
<div id="execution-error-GETapi-poll_types--poll_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-poll_types--poll_type-"></code></pre>
</div>
<form id="form-GETapi-poll_types--poll_type-" data-method="GET" data-path="api/poll_types/{poll_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-poll_types--poll_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-poll_types--poll_type-" onclick="tryItOut('GETapi-poll_types--poll_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-poll_types--poll_type-" onclick="cancelTryOut('GETapi-poll_types--poll_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-poll_types--poll_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/poll_types/{poll_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_type" data-endpoint="GETapi-poll_types--poll_type-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified PollType in storage.


PUT/PATCH /pollTypes/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/poll_types/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"veniam","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/poll_types/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "veniam",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-poll_types--poll_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-poll_types--poll_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-poll_types--poll_type-"></code></pre>
</div>
<div id="execution-error-PUTapi-poll_types--poll_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-poll_types--poll_type-"></code></pre>
</div>
<form id="form-PUTapi-poll_types--poll_type-" data-method="PUT" data-path="api/poll_types/{poll_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-poll_types--poll_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-poll_types--poll_type-" onclick="tryItOut('PUTapi-poll_types--poll_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-poll_types--poll_type-" onclick="cancelTryOut('PUTapi-poll_types--poll_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-poll_types--poll_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/poll_types/{poll_type}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/poll_types/{poll_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_type" data-endpoint="PUTapi-poll_types--poll_type-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-poll_types--poll_type-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-poll_types--poll_type-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-poll_types--poll_type-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified PollType from storage.


DELETE /pollTypes/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/poll_types/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_types/rerum"
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


<div id="execution-results-DELETEapi-poll_types--poll_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-poll_types--poll_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-poll_types--poll_type-"></code></pre>
</div>
<div id="execution-error-DELETEapi-poll_types--poll_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-poll_types--poll_type-"></code></pre>
</div>
<form id="form-DELETEapi-poll_types--poll_type-" data-method="DELETE" data-path="api/poll_types/{poll_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-poll_types--poll_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-poll_types--poll_type-" onclick="tryItOut('DELETEapi-poll_types--poll_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-poll_types--poll_type-" onclick="cancelTryOut('DELETEapi-poll_types--poll_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-poll_types--poll_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/poll_types/{poll_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_type" data-endpoint="DELETEapi-poll_types--poll_type-" data-component="url" required  hidden>
<br>

</p>
</form>



