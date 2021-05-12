# Folder Tag


## Display a listing of the FolderTag.


GET|HEAD /folderTags

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folder_tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_tags"
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
<div id="execution-results-GETapi-folder_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folder_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folder_tags"></code></pre>
</div>
<div id="execution-error-GETapi-folder_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folder_tags"></code></pre>
</div>
<form id="form-GETapi-folder_tags" data-method="GET" data-path="api/folder_tags" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folder_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folder_tags" onclick="tryItOut('GETapi-folder_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folder_tags" onclick="cancelTryOut('GETapi-folder_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folder_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folder_tags</code></b>
</p>
</form>


## Store a newly created FolderTag in storage.


POST /folderTags

> Example request:

```bash
curl -X POST \
    "http://localhost/api/folder_tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"folder_id":14,"tag_id":18,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/folder_tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "folder_id": 14,
    "tag_id": 18,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-folder_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-folder_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-folder_tags"></code></pre>
</div>
<div id="execution-error-POSTapi-folder_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-folder_tags"></code></pre>
</div>
<form id="form-POSTapi-folder_tags" data-method="POST" data-path="api/folder_tags" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-folder_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-folder_tags" onclick="tryItOut('POSTapi-folder_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-folder_tags" onclick="cancelTryOut('POSTapi-folder_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-folder_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/folder_tags</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="folder_id" data-endpoint="POSTapi-folder_tags" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-folder_tags" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-folder_tags" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-folder_tags" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified FolderTag.


GET|HEAD /folderTags/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/folder_tags/sed" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_tags/sed"
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
<div id="execution-results-GETapi-folder_tags--folder_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-folder_tags--folder_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-folder_tags--folder_tag-"></code></pre>
</div>
<div id="execution-error-GETapi-folder_tags--folder_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-folder_tags--folder_tag-"></code></pre>
</div>
<form id="form-GETapi-folder_tags--folder_tag-" data-method="GET" data-path="api/folder_tags/{folder_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-folder_tags--folder_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-folder_tags--folder_tag-" onclick="tryItOut('GETapi-folder_tags--folder_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-folder_tags--folder_tag-" onclick="cancelTryOut('GETapi-folder_tags--folder_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-folder_tags--folder_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/folder_tags/{folder_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_tag" data-endpoint="GETapi-folder_tags--folder_tag-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified FolderTag in storage.


PUT/PATCH /folderTags/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/folder_tags/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"folder_id":8,"tag_id":12,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/folder_tags/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "folder_id": 8,
    "tag_id": 12,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-folder_tags--folder_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-folder_tags--folder_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-folder_tags--folder_tag-"></code></pre>
</div>
<div id="execution-error-PUTapi-folder_tags--folder_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-folder_tags--folder_tag-"></code></pre>
</div>
<form id="form-PUTapi-folder_tags--folder_tag-" data-method="PUT" data-path="api/folder_tags/{folder_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-folder_tags--folder_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-folder_tags--folder_tag-" onclick="tryItOut('PUTapi-folder_tags--folder_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-folder_tags--folder_tag-" onclick="cancelTryOut('PUTapi-folder_tags--folder_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-folder_tags--folder_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/folder_tags/{folder_tag}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/folder_tags/{folder_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_tag" data-endpoint="PUTapi-folder_tags--folder_tag-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>folder_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="folder_id" data-endpoint="PUTapi-folder_tags--folder_tag-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="PUTapi-folder_tags--folder_tag-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-folder_tags--folder_tag-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-folder_tags--folder_tag-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified FolderTag from storage.


DELETE /folderTags/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/folder_tags/reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/folder_tags/reprehenderit"
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


<div id="execution-results-DELETEapi-folder_tags--folder_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-folder_tags--folder_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-folder_tags--folder_tag-"></code></pre>
</div>
<div id="execution-error-DELETEapi-folder_tags--folder_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-folder_tags--folder_tag-"></code></pre>
</div>
<form id="form-DELETEapi-folder_tags--folder_tag-" data-method="DELETE" data-path="api/folder_tags/{folder_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-folder_tags--folder_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-folder_tags--folder_tag-" onclick="tryItOut('DELETEapi-folder_tags--folder_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-folder_tags--folder_tag-" onclick="cancelTryOut('DELETEapi-folder_tags--folder_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-folder_tags--folder_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/folder_tags/{folder_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>folder_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="folder_tag" data-endpoint="DELETEapi-folder_tags--folder_tag-" data-component="url" required  hidden>
<br>
</p>
</form>



