# Poll Option


## Display a listing of the PollOption.


GET|HEAD /pollOptions

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/poll_options" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_options"
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
    "data": [],
    "message": "Poll Options retrieved successfully"
}
```
<div id="execution-results-GETapi-poll_options" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-poll_options"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-poll_options"></code></pre>
</div>
<div id="execution-error-GETapi-poll_options" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-poll_options"></code></pre>
</div>
<form id="form-GETapi-poll_options" data-method="GET" data-path="api/poll_options" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-poll_options', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-poll_options" onclick="tryItOut('GETapi-poll_options');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-poll_options" onclick="cancelTryOut('GETapi-poll_options');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-poll_options" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/poll_options</code></b>
</p>
</form>


## Store a newly created PollOption in storage.


POST /pollOptions

> Example request:

```bash
curl -X POST \
    "http://localhost/api/poll_options" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_id":20,"name":"repellendus","value":"molestias","count":9,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/poll_options"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_id": 20,
    "name": "repellendus",
    "value": "molestias",
    "count": 9,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-poll_options" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-poll_options"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-poll_options"></code></pre>
</div>
<div id="execution-error-POSTapi-poll_options" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-poll_options"></code></pre>
</div>
<form id="form-POSTapi-poll_options" data-method="POST" data-path="api/poll_options" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-poll_options', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-poll_options" onclick="tryItOut('POSTapi-poll_options');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-poll_options" onclick="cancelTryOut('POSTapi-poll_options');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-poll_options" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/poll_options</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_id" data-endpoint="POSTapi-poll_options" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-poll_options" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="POSTapi-poll_options" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>count</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="count" data-endpoint="POSTapi-poll_options" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-poll_options" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-poll_options" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified PollOption.


GET|HEAD /pollOptions/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/poll_options/fugit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_options/fugit"
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
    "message": "Poll Option not found"
}
```
<div id="execution-results-GETapi-poll_options--poll_option-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-poll_options--poll_option-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-poll_options--poll_option-"></code></pre>
</div>
<div id="execution-error-GETapi-poll_options--poll_option-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-poll_options--poll_option-"></code></pre>
</div>
<form id="form-GETapi-poll_options--poll_option-" data-method="GET" data-path="api/poll_options/{poll_option}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-poll_options--poll_option-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-poll_options--poll_option-" onclick="tryItOut('GETapi-poll_options--poll_option-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-poll_options--poll_option-" onclick="cancelTryOut('GETapi-poll_options--poll_option-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-poll_options--poll_option-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/poll_options/{poll_option}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_option</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_option" data-endpoint="GETapi-poll_options--poll_option-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified PollOption in storage.


PUT/PATCH /pollOptions/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/poll_options/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_id":19,"name":"est","value":"aut","count":14,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/poll_options/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_id": 19,
    "name": "est",
    "value": "aut",
    "count": 14,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-poll_options--poll_option-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-poll_options--poll_option-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-poll_options--poll_option-"></code></pre>
</div>
<div id="execution-error-PUTapi-poll_options--poll_option-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-poll_options--poll_option-"></code></pre>
</div>
<form id="form-PUTapi-poll_options--poll_option-" data-method="PUT" data-path="api/poll_options/{poll_option}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-poll_options--poll_option-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-poll_options--poll_option-" onclick="tryItOut('PUTapi-poll_options--poll_option-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-poll_options--poll_option-" onclick="cancelTryOut('PUTapi-poll_options--poll_option-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-poll_options--poll_option-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/poll_options/{poll_option}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/poll_options/{poll_option}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_option</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_option" data-endpoint="PUTapi-poll_options--poll_option-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>poll_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_id" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>count</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="count" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-poll_options--poll_option-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified PollOption from storage.


DELETE /pollOptions/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/poll_options/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/poll_options/quia"
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


<div id="execution-results-DELETEapi-poll_options--poll_option-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-poll_options--poll_option-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-poll_options--poll_option-"></code></pre>
</div>
<div id="execution-error-DELETEapi-poll_options--poll_option-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-poll_options--poll_option-"></code></pre>
</div>
<form id="form-DELETEapi-poll_options--poll_option-" data-method="DELETE" data-path="api/poll_options/{poll_option}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-poll_options--poll_option-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-poll_options--poll_option-" onclick="tryItOut('DELETEapi-poll_options--poll_option-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-poll_options--poll_option-" onclick="cancelTryOut('DELETEapi-poll_options--poll_option-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-poll_options--poll_option-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/poll_options/{poll_option}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll_option</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll_option" data-endpoint="DELETEapi-poll_options--poll_option-" data-component="url" required  hidden>
<br>

</p>
</form>



