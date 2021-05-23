# Roles


## Display a listing of the Roles.


GET|HEAD /roles

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roles"
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
<div id="execution-results-GETapi-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles"></code></pre>
</div>
<div id="execution-error-GETapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles"></code></pre>
</div>
<form id="form-GETapi-roles" data-method="GET" data-path="api/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-roles" onclick="tryItOut('GETapi-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-roles" onclick="cancelTryOut('GETapi-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/roles</code></b>
</p>
</form>


## Store a newly created Roles in storage.


POST /roles

> Example request:

```bash
curl -X POST \
    "http://localhost/api/roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"repellendus","guard_name":"laudantium","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "repellendus",
    "guard_name": "laudantium",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-roles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-roles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-roles"></code></pre>
</div>
<div id="execution-error-POSTapi-roles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-roles"></code></pre>
</div>
<form id="form-POSTapi-roles" data-method="POST" data-path="api/roles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-roles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-roles" onclick="tryItOut('POSTapi-roles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-roles" onclick="cancelTryOut('POSTapi-roles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-roles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/roles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-roles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="guard_name" data-endpoint="POSTapi-roles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-roles" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-roles" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Roles.


GET|HEAD /roles/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/roles/aliquid" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roles/aliquid"
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
<div id="execution-results-GETapi-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-roles--role-"></code></pre>
</div>
<div id="execution-error-GETapi-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-roles--role-"></code></pre>
</div>
<form id="form-GETapi-roles--role-" data-method="GET" data-path="api/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-roles--role-" onclick="tryItOut('GETapi-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-roles--role-" onclick="cancelTryOut('GETapi-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="GETapi-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Roles in storage.


PUT/PATCH /roles/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/roles/tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"porro","guard_name":"voluptate","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/roles/tempora"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "porro",
    "guard_name": "voluptate",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-roles--role-"></code></pre>
</div>
<div id="execution-error-PUTapi-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-roles--role-"></code></pre>
</div>
<form id="form-PUTapi-roles--role-" data-method="PUT" data-path="api/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-roles--role-" onclick="tryItOut('PUTapi-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-roles--role-" onclick="cancelTryOut('PUTapi-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/roles/{role}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="PUTapi-roles--role-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-roles--role-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>guard_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="guard_name" data-endpoint="PUTapi-roles--role-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-roles--role-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-roles--role-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Roles from storage.


DELETE /roles/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/roles/illo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/roles/illo"
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


<div id="execution-results-DELETEapi-roles--role-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-roles--role-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-roles--role-"></code></pre>
</div>
<div id="execution-error-DELETEapi-roles--role-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-roles--role-"></code></pre>
</div>
<form id="form-DELETEapi-roles--role-" data-method="DELETE" data-path="api/roles/{role}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-roles--role-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-roles--role-" onclick="tryItOut('DELETEapi-roles--role-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-roles--role-" onclick="cancelTryOut('DELETEapi-roles--role-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-roles--role-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/roles/{role}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="role" data-endpoint="DELETEapi-roles--role-" data-component="url" required  hidden>
<br>
</p>
</form>



