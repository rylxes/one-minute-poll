# File


## Display a listing of the File.


GET|HEAD /files

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files"
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
    "message": "Files retrieved successfully"
}
```
<div id="execution-results-GETapi-files" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-files"></code></pre>
</div>
<div id="execution-error-GETapi-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-files"></code></pre>
</div>
<form id="form-GETapi-files" data-method="GET" data-path="api/files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-files" onclick="tryItOut('GETapi-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-files" onclick="cancelTryOut('GETapi-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/files</code></b>
</p>
</form>


## Store a newly created File in storage.


POST /files

> Example request:

```bash
curl -X POST \
    "http://localhost/api/files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"library_id":3,"url":"doloremque","name":"in","is_lock":false,"is_favourite":false,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "library_id": 3,
    "url": "doloremque",
    "name": "in",
    "is_lock": false,
    "is_favourite": false,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-files"></code></pre>
</div>
<div id="execution-error-POSTapi-files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-files"></code></pre>
</div>
<form id="form-POSTapi-files" data-method="POST" data-path="api/files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-files" onclick="tryItOut('POSTapi-files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-files" onclick="cancelTryOut('POSTapi-files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/files</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>library_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="library_id" data-endpoint="POSTapi-files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="POSTapi-files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_lock</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_lock" value="true" data-endpoint="POSTapi-files" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_lock" value="false" data-endpoint="POSTapi-files" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="POSTapi-files" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="POSTapi-files" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-files" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-files" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified File.


GET|HEAD /files/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/files/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/qui"
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
    "message": "File not found"
}
```
<div id="execution-results-GETapi-files--file-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-files--file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-files--file-"></code></pre>
</div>
<div id="execution-error-GETapi-files--file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-files--file-"></code></pre>
</div>
<form id="form-GETapi-files--file-" data-method="GET" data-path="api/files/{file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-files--file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-files--file-" onclick="tryItOut('GETapi-files--file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-files--file-" onclick="cancelTryOut('GETapi-files--file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-files--file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/files/{file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file" data-endpoint="GETapi-files--file-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified File in storage.


PUT/PATCH /files/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/files/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"library_id":4,"url":"autem","name":"ad","is_lock":false,"is_favourite":false,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/files/molestias"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "library_id": 4,
    "url": "autem",
    "name": "ad",
    "is_lock": false,
    "is_favourite": false,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-files--file-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-files--file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-files--file-"></code></pre>
</div>
<div id="execution-error-PUTapi-files--file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-files--file-"></code></pre>
</div>
<form id="form-PUTapi-files--file-" data-method="PUT" data-path="api/files/{file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-files--file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-files--file-" onclick="tryItOut('PUTapi-files--file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-files--file-" onclick="cancelTryOut('PUTapi-files--file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-files--file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/files/{file}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/files/{file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file" data-endpoint="PUTapi-files--file-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>library_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="library_id" data-endpoint="PUTapi-files--file-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="url" data-endpoint="PUTapi-files--file-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-files--file-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_lock</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_lock" value="true" data-endpoint="PUTapi-files--file-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_lock" value="false" data-endpoint="PUTapi-files--file-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="PUTapi-files--file-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="PUTapi-files--file-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-files--file-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-files--file-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified File from storage.


DELETE /files/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/files/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/qui"
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


<div id="execution-results-DELETEapi-files--file-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-files--file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-files--file-"></code></pre>
</div>
<div id="execution-error-DELETEapi-files--file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-files--file-"></code></pre>
</div>
<form id="form-DELETEapi-files--file-" data-method="DELETE" data-path="api/files/{file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-files--file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-files--file-" onclick="tryItOut('DELETEapi-files--file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-files--file-" onclick="cancelTryOut('DELETEapi-files--file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-files--file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/files/{file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file" data-endpoint="DELETEapi-files--file-" data-component="url" required  hidden>
<br>
</p>
</form>



