# Permissions


## Assigns Permissions to User




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"fugiat","permission_id":"beatae"}'

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
    "user_id": "fugiat",
    "permission_id": "beatae"
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


## Assigns Permissions to Library




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/library" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"library_id":"libero","permission_id":"reprehenderit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/assign/library"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "library_id": "libero",
    "permission_id": "reprehenderit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-assign-library" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign-library"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign-library"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-assign-library" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-assign-library"></code></pre>
</div>
<form id="form-POSTapi-permissions-assign-library" data-method="POST" data-path="api/permissions/assign/library" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign-library', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-assign-library" onclick="tryItOut('POSTapi-permissions-assign-library');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-assign-library" onclick="cancelTryOut('POSTapi-permissions-assign-library');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-assign-library" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/assign/library</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>library_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library_id" data-endpoint="POSTapi-permissions-assign-library" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-assign-library" data-component="body" required  hidden>
<br>
</p>

</form>


## Assigns Permissions to Folder




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/folder" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"folder_id":"quas","permission_id":"libero"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/assign/folder"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "folder_id": "quas",
    "permission_id": "libero"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-assign-folder" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign-folder"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign-folder"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-assign-folder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-assign-folder"></code></pre>
</div>
<form id="form-POSTapi-permissions-assign-folder" data-method="POST" data-path="api/permissions/assign/folder" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign-folder', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-assign-folder" onclick="tryItOut('POSTapi-permissions-assign-folder');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-assign-folder" onclick="cancelTryOut('POSTapi-permissions-assign-folder');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-assign-folder" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/assign/folder</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_id" data-endpoint="POSTapi-permissions-assign-folder" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-assign-folder" data-component="body" required  hidden>
<br>
</p>

</form>


## UnAssigns Permissions to User




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/unassign/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"reprehenderit","permission_id":"quae"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/unassign/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "reprehenderit",
    "permission_id": "quae"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-unassign-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-unassign-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-unassign-user"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-unassign-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-unassign-user"></code></pre>
</div>
<form id="form-POSTapi-permissions-unassign-user" data-method="POST" data-path="api/permissions/unassign/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-unassign-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-unassign-user" onclick="tryItOut('POSTapi-permissions-unassign-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-unassign-user" onclick="cancelTryOut('POSTapi-permissions-unassign-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-unassign-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/unassign/user</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-permissions-unassign-user" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-unassign-user" data-component="body" required  hidden>
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
    -d '{"role_id":"alias","permission_id":"voluptatem"}'

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
    "role_id": "alias",
    "permission_id": "voluptatem"
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


## Get Permissions for a User




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/get/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":"ut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/get/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-get-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-get-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-get-user"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-get-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-get-user"></code></pre>
</div>
<form id="form-POSTapi-permissions-get-user" data-method="POST" data-path="api/permissions/get/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-get-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-get-user" onclick="tryItOut('POSTapi-permissions-get-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-get-user" onclick="cancelTryOut('POSTapi-permissions-get-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-get-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/get/user</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-permissions-get-user" data-component="body" required  hidden>
<br>
</p>

</form>


## Assigns Permissions to File




> Example request:

```bash
curl -X POST \
    "http://localhost/api/permissions/assign/file" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":"nulla","permission_id":"est"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/assign/file"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": "nulla",
    "permission_id": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-permissions-assign-file" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-permissions-assign-file"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-permissions-assign-file"></code></pre>
</div>
<div id="execution-error-POSTapi-permissions-assign-file" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-permissions-assign-file"></code></pre>
</div>
<form id="form-POSTapi-permissions-assign-file" data-method="POST" data-path="api/permissions/assign/file" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-permissions-assign-file', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-permissions-assign-file" onclick="tryItOut('POSTapi-permissions-assign-file');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-permissions-assign-file" onclick="cancelTryOut('POSTapi-permissions-assign-file');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-permissions-assign-file" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/permissions/assign/file</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_id" data-endpoint="POSTapi-permissions-assign-file" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>permission_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="permission_id" data-endpoint="POSTapi-permissions-assign-file" data-component="body" required  hidden>
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
    -d '{"name":"nam"}'

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
    "name": "nam"
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

</form>


## Display the specified Permissions.


GET|HEAD /permissions/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/permissions/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/excepturi"
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
    "http://localhost/api/permissions/quaerat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"non"}'

```

```javascript
const url = new URL(
    "http://localhost/api/permissions/quaerat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "non"
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

</form>


## Remove the specified Permissions from storage.


DELETE /permissions/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/permissions/eligendi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/permissions/eligendi"
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



