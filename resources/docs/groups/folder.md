# Folder


## my Favourites.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folders/myFavourites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folders/myFavourites"
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
<div id="execution-results-GETapi-folders-myFavourites" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folders-myFavourites"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders-myFavourites"></code></pre>
</div>
<div id="execution-error-GETapi-folders-myFavourites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders-myFavourites"></code></pre>
</div>
<form id="form-GETapi-folders-myFavourites" data-method="GET" data-path="api/folders/myFavourites" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folders-myFavourites', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folders-myFavourites" onclick="tryItOut('GETapi-folders-myFavourites');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folders-myFavourites" onclick="cancelTryOut('GETapi-folders-myFavourites');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folders-myFavourites" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folders/myFavourites</code></b>
</p>
</form>


## Validate File&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/folders/validate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"deserunt","folder_id":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/folders/validate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "deserunt",
    "folder_id": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-folders-validate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-folders-validate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders-validate"></code></pre>
</div>
<div id="execution-error-POSTapi-folders-validate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders-validate"></code></pre>
</div>
<form id="form-POSTapi-folders-validate" data-method="POST" data-path="api/folders/validate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders-validate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-folders-validate" onclick="tryItOut('POSTapi-folders-validate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-folders-validate" onclick="cancelTryOut('POSTapi-folders-validate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-folders-validate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/folders/validate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-folders-validate" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_id" data-endpoint="POSTapi-folders-validate" data-component="body" required  hidden>
<br>
</p>

</form>


## Get All Folders By Library.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folders/byLibrary/consectetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folders/byLibrary/consectetur"
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
<div id="execution-results-GETapi-folders-byLibrary--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folders-byLibrary--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders-byLibrary--id-"></code></pre>
</div>
<div id="execution-error-GETapi-folders-byLibrary--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders-byLibrary--id-"></code></pre>
</div>
<form id="form-GETapi-folders-byLibrary--id-" data-method="GET" data-path="api/folders/byLibrary/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folders-byLibrary--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folders-byLibrary--id-" onclick="tryItOut('GETapi-folders-byLibrary--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folders-byLibrary--id-" onclick="cancelTryOut('GETapi-folders-byLibrary--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folders-byLibrary--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folders/byLibrary/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-folders-byLibrary--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Display a listing of the Folder.


GET|HEAD /folders

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folders"
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
<div id="execution-results-GETapi-folders" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders"></code></pre>
</div>
<div id="execution-error-GETapi-folders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders"></code></pre>
</div>
<form id="form-GETapi-folders" data-method="GET" data-path="api/folders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folders" onclick="tryItOut('GETapi-folders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folders" onclick="cancelTryOut('GETapi-folders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folders</code></b>
</p>
</form>


## Store a newly created Folder in storage.


POST /folders

> Example request:

```bash
curl -X POST \
    "http://localhost/api/folders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ea","library_id":"neque","is_favourite":false,"is_lock":false,"parent_id":7}'

```

```javascript
const url = new URL(
    "http://localhost/api/folders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ea",
    "library_id": "neque",
    "is_favourite": false,
    "is_lock": false,
    "parent_id": 7
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-folders" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-folders"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folders"></code></pre>
</div>
<div id="execution-error-POSTapi-folders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folders"></code></pre>
</div>
<form id="form-POSTapi-folders" data-method="POST" data-path="api/folders" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-folders', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-folders" onclick="tryItOut('POSTapi-folders');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-folders" onclick="cancelTryOut('POSTapi-folders');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-folders" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/folders</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-folders" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>library_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library_id" data-endpoint="POSTapi-folders" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-folders" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="POSTapi-folders" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-folders" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="POSTapi-folders" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_lock</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-folders" hidden><input type="radio" name="is_lock" value="true" data-endpoint="POSTapi-folders" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-folders" hidden><input type="radio" name="is_lock" value="false" data-endpoint="POSTapi-folders" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="POSTapi-folders" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Folder.


GET|HEAD /folders/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folders/ipsa" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folders/ipsa"
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
<div id="execution-results-GETapi-folders--folder-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folders--folder-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folders--folder-"></code></pre>
</div>
<div id="execution-error-GETapi-folders--folder-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folders--folder-"></code></pre>
</div>
<form id="form-GETapi-folders--folder-" data-method="GET" data-path="api/folders/{folder}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folders--folder-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folders--folder-" onclick="tryItOut('GETapi-folders--folder-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folders--folder-" onclick="cancelTryOut('GETapi-folders--folder-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folders--folder-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folders/{folder}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder" data-endpoint="GETapi-folders--folder-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Folder in storage.


PUT/PATCH /folders/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/folders/adipisci" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ullam","parent_id":9}'

```

```javascript
const url = new URL(
    "http://localhost/api/folders/adipisci"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ullam",
    "parent_id": 9
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-folders--folder-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-folders--folder-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-folders--folder-"></code></pre>
</div>
<div id="execution-error-PUTapi-folders--folder-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-folders--folder-"></code></pre>
</div>
<form id="form-PUTapi-folders--folder-" data-method="PUT" data-path="api/folders/{folder}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-folders--folder-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-folders--folder-" onclick="tryItOut('PUTapi-folders--folder-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-folders--folder-" onclick="cancelTryOut('PUTapi-folders--folder-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-folders--folder-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/folders/{folder}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/folders/{folder}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder" data-endpoint="PUTapi-folders--folder-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-folders--folder-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>parent_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="parent_id" data-endpoint="PUTapi-folders--folder-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Folder from storage.


DELETE /folders/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/folders/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folders/nam"
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


<div id="execution-results-DELETEapi-folders--folder-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-folders--folder-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folders--folder-"></code></pre>
</div>
<div id="execution-error-DELETEapi-folders--folder-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folders--folder-"></code></pre>
</div>
<form id="form-DELETEapi-folders--folder-" data-method="DELETE" data-path="api/folders/{folder}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folders--folder-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-folders--folder-" onclick="tryItOut('DELETEapi-folders--folder-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-folders--folder-" onclick="cancelTryOut('DELETEapi-folders--folder-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-folders--folder-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/folders/{folder}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder" data-endpoint="DELETEapi-folders--folder-" data-component="url" required  hidden>
<br>
</p>
</form>



