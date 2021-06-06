# Vote Value


## Display a listing of the VoteValue.


GET|HEAD /voteValues

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/vote_values" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/vote_values"
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
    "http://localhost/api/vote_values" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_type_id":1,"name":"consequuntur","value":"qui","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/vote_values"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_type_id": 1,
    "name": "consequuntur",
    "value": "qui",
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
    -G "http://localhost/api/vote_values/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/vote_values/consectetur"
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
    "http://localhost/api/vote_values/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"poll_type_id":19,"name":"ut","value":"quidem","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/vote_values/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "poll_type_id": 19,
    "name": "ut",
    "value": "quidem",
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
    "http://localhost/api/vote_values/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/vote_values/velit"
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



