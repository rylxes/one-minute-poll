# Permissions


## Assigns Permissions to User




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"aut","permission_id":"ut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/assign/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "aut",
    "permission_id": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-assign-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign-user"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-assign-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-assign-user"></code></pre>
</div>
<form id="form-POSTapi-permissions-assign-user" data-method="POST" data-path="api/permissions/assign/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-assign-user" onclick="tryItOut('POSTapi-permissions-assign-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-assign-user" onclick="cancelTryOut('POSTapi-permissions-assign-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-assign-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/assign/user</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-permissions-assign-user" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-assign-user" data-component="body" required  hidden>
<br>
</p>

</form>


## Assigns Permissions to Role




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/role" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"role_id":"autem","permission_id":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/assign/role"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "role_id": "autem",
    "permission_id": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-assign-role" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign-role"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign-role"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-assign-role" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-assign-role"></code></pre>
</div>
<form id="form-POSTapi-permissions-assign-role" data-method="POST" data-path="api/permissions/assign/role" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign-role', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-assign-role" onclick="tryItOut('POSTapi-permissions-assign-role');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-assign-role" onclick="cancelTryOut('POSTapi-permissions-assign-role');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-assign-role" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/assign/role</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role_id" data-endpoint="POSTapi-permissions-assign-role" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-assign-role" data-component="body" required  hidden>
<br>
</p>

</form>


## Display a listing of the Permissions.


GET|HEAD /permissions

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions"
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
<div id="execution-results-GETapi-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-permissions"></code></pre>
</div>
<div id="execution-error-GETapi-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-permissions"></code></pre>
</div>
<form id="form-GETapi-permissions" data-method="GET" data-path="api/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-permissions" onclick="tryItOut('GETapi-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-permissions" onclick="cancelTryOut('GETapi-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/permissions</code></b>
</p>
</form>


## Store a newly created Permissions in storage.


POST /permissions

> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"qui","guard_name":"vel","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "qui",
    "guard_name": "vel",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions"></code></pre>
</div>
<form id="form-POSTapi-permissions" data-method="POST" data-path="api/permissions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions" onclick="tryItOut('POSTapi-permissions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions" onclick="cancelTryOut('POSTapi-permissions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-permissions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="guard_name" data-endpoint="POSTapi-permissions" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-permissions" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-permissions" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Permissions.


GET|HEAD /permissions/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/permissions/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/rerum"
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
<div id="execution-results-GETapi-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-permissions--permission-"></code></pre>
</div>
<div id="execution-error-GETapi-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-permissions--permission-"></code></pre>
</div>
<form id="form-GETapi-permissions--permission-" data-method="GET" data-path="api/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-permissions--permission-" onclick="tryItOut('GETapi-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-permissions--permission-" onclick="cancelTryOut('GETapi-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="GETapi-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Permissions in storage.


PUT/PATCH /permissions/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/permissions/autem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"numquam","guard_name":"nulla","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/autem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "numquam",
    "guard_name": "nulla",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-permissions--permission-"></code></pre>
</div>
<div id="execution-error-PUTapi-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-permissions--permission-"></code></pre>
</div>
<form id="form-PUTapi-permissions--permission-" data-method="PUT" data-path="api/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-permissions--permission-" onclick="tryItOut('PUTapi-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-permissions--permission-" onclick="cancelTryOut('PUTapi-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/permissions/{permission}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="PUTapi-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-permissions--permission-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="guard_name" data-endpoint="PUTapi-permissions--permission-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-permissions--permission-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-permissions--permission-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Permissions from storage.


DELETE /permissions/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/permissions/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/quia"
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


<div id="execution-results-DELETEapi-permissions--permission-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-permissions--permission-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-permissions--permission-"></code></pre>
</div>
<div id="execution-error-DELETEapi-permissions--permission-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-permissions--permission-"></code></pre>
</div>
<form id="form-DELETEapi-permissions--permission-" data-method="DELETE" data-path="api/permissions/{permission}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-permissions--permission-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-permissions--permission-" onclick="tryItOut('DELETEapi-permissions--permission-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-permissions--permission-" onclick="cancelTryOut('DELETEapi-permissions--permission-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-permissions--permission-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/permissions/{permission}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>permission</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission" data-endpoint="DELETEapi-permissions--permission-" data-component="url" required  hidden>
<br>
</p>
</form>



