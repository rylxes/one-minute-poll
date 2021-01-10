# Folder File


## Display a listing of the FolderFile.


GET|HEAD /folderFiles

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folder_files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_files"
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
            "file_id": 8,
            "folder_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "file_id": 9,
            "folder_id": 1,
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "Folder Files retrieved successfully"
}
```
<div id="execution-results-GETapi-folder_files" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folder_files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folder_files"></code></pre>
</div>
<div id="execution-error-GETapi-folder_files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folder_files"></code></pre>
</div>
<form id="form-GETapi-folder_files" data-method="GET" data-path="api/folder_files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folder_files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folder_files" onclick="tryItOut('GETapi-folder_files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folder_files" onclick="cancelTryOut('GETapi-folder_files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folder_files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folder_files</code></b>
</p>
</form>


## Store a newly created FolderFile in storage.


POST /folderFiles

> Example request:

```bash
curl -X POST \
    "http://localhost/api/folder_files" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":18,"folder_id":15}'

```

```javascript
const url = new URL(
    "http://localhost/api/folder_files"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 18,
    "folder_id": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-folder_files" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-folder_files"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folder_files"></code></pre>
</div>
<div id="execution-error-POSTapi-folder_files" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folder_files"></code></pre>
</div>
<form id="form-POSTapi-folder_files" data-method="POST" data-path="api/folder_files" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-folder_files', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-folder_files" onclick="tryItOut('POSTapi-folder_files');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-folder_files" onclick="cancelTryOut('POSTapi-folder_files');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-folder_files" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/folder_files</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="POSTapi-folder_files" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="folder_id" data-endpoint="POSTapi-folder_files" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified FolderFile.


GET|HEAD /folderFiles/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folder_files/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_files/dolorum"
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
    "message": "Folder File not found"
}
```
<div id="execution-results-GETapi-folder_files--folder_file-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folder_files--folder_file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folder_files--folder_file-"></code></pre>
</div>
<div id="execution-error-GETapi-folder_files--folder_file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folder_files--folder_file-"></code></pre>
</div>
<form id="form-GETapi-folder_files--folder_file-" data-method="GET" data-path="api/folder_files/{folder_file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folder_files--folder_file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folder_files--folder_file-" onclick="tryItOut('GETapi-folder_files--folder_file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folder_files--folder_file-" onclick="cancelTryOut('GETapi-folder_files--folder_file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folder_files--folder_file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folder_files/{folder_file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_file" data-endpoint="GETapi-folder_files--folder_file-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified FolderFile in storage.


PUT/PATCH /folderFiles/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/folder_files/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":9,"folder_id":10}'

```

```javascript
const url = new URL(
    "http://localhost/api/folder_files/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 9,
    "folder_id": 10
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-folder_files--folder_file-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-folder_files--folder_file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-folder_files--folder_file-"></code></pre>
</div>
<div id="execution-error-PUTapi-folder_files--folder_file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-folder_files--folder_file-"></code></pre>
</div>
<form id="form-PUTapi-folder_files--folder_file-" data-method="PUT" data-path="api/folder_files/{folder_file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-folder_files--folder_file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-folder_files--folder_file-" onclick="tryItOut('PUTapi-folder_files--folder_file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-folder_files--folder_file-" onclick="cancelTryOut('PUTapi-folder_files--folder_file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-folder_files--folder_file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/folder_files/{folder_file}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/folder_files/{folder_file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_file" data-endpoint="PUTapi-folder_files--folder_file-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="PUTapi-folder_files--folder_file-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="folder_id" data-endpoint="PUTapi-folder_files--folder_file-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified FolderFile from storage.


DELETE /folderFiles/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/folder_files/ea" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_files/ea"
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


<div id="execution-results-DELETEapi-folder_files--folder_file-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-folder_files--folder_file-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folder_files--folder_file-"></code></pre>
</div>
<div id="execution-error-DELETEapi-folder_files--folder_file-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folder_files--folder_file-"></code></pre>
</div>
<form id="form-DELETEapi-folder_files--folder_file-" data-method="DELETE" data-path="api/folder_files/{folder_file}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folder_files--folder_file-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-folder_files--folder_file-" onclick="tryItOut('DELETEapi-folder_files--folder_file-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-folder_files--folder_file-" onclick="cancelTryOut('DELETEapi-folder_files--folder_file-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-folder_files--folder_file-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/folder_files/{folder_file}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_file</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_file" data-endpoint="DELETEapi-folder_files--folder_file-" data-component="url" required  hidden>
<br>
</p>
</form>



