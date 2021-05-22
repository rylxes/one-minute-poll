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


> Example response (401):

```json
{
    "message": "Unauthorized",
    "status": 401
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
    -d '{"name":"quod","is_favourite":false,"is_lock":false,"folder_id":"aliquid"}'

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
    "name": "quod",
    "is_favourite": false,
    "is_lock": false,
    "folder_id": "aliquid"
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
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="POSTapi-files" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="POSTapi-files" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_lock</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_lock" value="true" data-endpoint="POSTapi-files" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-files" hidden><input type="radio" name="is_lock" value="false" data-endpoint="POSTapi-files" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_id" data-endpoint="POSTapi-files" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified File.


GET|HEAD /files/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/files/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/et"
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
    "http://localhost/api/files/ad" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"iste","is_favourite":false,"is_lock":false,"folder_id":"velit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/files/ad"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "iste",
    "is_favourite": false,
    "is_lock": false,
    "folder_id": "velit"
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
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-files--file-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="PUTapi-files--file-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="PUTapi-files--file-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_lock</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_lock" value="true" data-endpoint="PUTapi-files--file-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-files--file-" hidden><input type="radio" name="is_lock" value="false" data-endpoint="PUTapi-files--file-" data-component="body" ><code>false</code></label>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_id" data-endpoint="PUTapi-files--file-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified File from storage.


DELETE /files/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/files/inventore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/inventore"
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


## my Favourites.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/files/myFavourites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/myFavourites"
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
<div id="execution-results-GETapi-files-myFavourites" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-files-myFavourites"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-files-myFavourites"></code></pre>
</div>
<div id="execution-error-GETapi-files-myFavourites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-files-myFavourites"></code></pre>
</div>
<form id="form-GETapi-files-myFavourites" data-method="GET" data-path="api/files/myFavourites" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-files-myFavourites', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-files-myFavourites" onclick="tryItOut('GETapi-files-myFavourites');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-files-myFavourites" onclick="cancelTryOut('GETapi-files-myFavourites');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-files-myFavourites" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/files/myFavourites</code></b>
</p>
</form>


## Validate File&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/files/validate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"voluptatem","file_id":"quod"}'

```

```javascript
const url = new URL(
    "http://localhost/api/files/validate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "voluptatem",
    "file_id": "quod"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-files-validate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-files-validate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-files-validate"></code></pre>
</div>
<div id="execution-error-POSTapi-files-validate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-files-validate"></code></pre>
</div>
<form id="form-POSTapi-files-validate" data-method="POST" data-path="api/files/validate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-files-validate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-files-validate" onclick="tryItOut('POSTapi-files-validate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-files-validate" onclick="cancelTryOut('POSTapi-files-validate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-files-validate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/files/validate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-files-validate" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_id" data-endpoint="POSTapi-files-validate" data-component="body" required  hidden>
<br>
</p>

</form>


## Move file to another folder.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/files/moveFile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":"tenetur","from_folder_id":"asperiores","to_folder_id":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/files/moveFile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": "tenetur",
    "from_folder_id": "asperiores",
    "to_folder_id": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-files-moveFile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-files-moveFile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-files-moveFile"></code></pre>
</div>
<div id="execution-error-POSTapi-files-moveFile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-files-moveFile"></code></pre>
</div>
<form id="form-POSTapi-files-moveFile" data-method="POST" data-path="api/files/moveFile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-files-moveFile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-files-moveFile" onclick="tryItOut('POSTapi-files-moveFile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-files-moveFile" onclick="cancelTryOut('POSTapi-files-moveFile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-files-moveFile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/files/moveFile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_id" data-endpoint="POSTapi-files-moveFile" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>from_folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="from_folder_id" data-endpoint="POSTapi-files-moveFile" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>to_folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="to_folder_id" data-endpoint="POSTapi-files-moveFile" data-component="body" required  hidden>
<br>
</p>

</form>


## Copy file to another folder.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/files/copyFile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":"inventore","folder_id":"eius"}'

```

```javascript
const url = new URL(
    "http://localhost/api/files/copyFile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": "inventore",
    "folder_id": "eius"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-files-copyFile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-files-copyFile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-files-copyFile"></code></pre>
</div>
<div id="execution-error-POSTapi-files-copyFile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-files-copyFile"></code></pre>
</div>
<form id="form-POSTapi-files-copyFile" data-method="POST" data-path="api/files/copyFile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-files-copyFile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-files-copyFile" onclick="tryItOut('POSTapi-files-copyFile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-files-copyFile" onclick="cancelTryOut('POSTapi-files-copyFile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-files-copyFile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/files/copyFile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_id" data-endpoint="POSTapi-files-copyFile" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_id" data-endpoint="POSTapi-files-copyFile" data-component="body" required  hidden>
<br>
</p>

</form>


## Get All Files By Folder.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/files/byFolder/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/files/byFolder/non"
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
<div id="execution-results-GETapi-files-byFolder--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-files-byFolder--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-files-byFolder--id-"></code></pre>
</div>
<div id="execution-error-GETapi-files-byFolder--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-files-byFolder--id-"></code></pre>
</div>
<form id="form-GETapi-files-byFolder--id-" data-method="GET" data-path="api/files/byFolder/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-files-byFolder--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-files-byFolder--id-" onclick="tryItOut('GETapi-files-byFolder--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-files-byFolder--id-" onclick="cancelTryOut('GETapi-files-byFolder--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-files-byFolder--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/files/byFolder/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-files-byFolder--id-" data-component="url" required  hidden>
<br>
</p>
</form>



