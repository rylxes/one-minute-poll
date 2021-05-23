# File Tag


## Display a listing of the FileTag.


GET|HEAD /fileTags

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/file_tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_tags"
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
<div id="execution-results-GETapi-file_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-file_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-file_tags"></code></pre>
</div>
<div id="execution-error-GETapi-file_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-file_tags"></code></pre>
</div>
<form id="form-GETapi-file_tags" data-method="GET" data-path="api/file_tags" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-file_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-file_tags" onclick="tryItOut('GETapi-file_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-file_tags" onclick="cancelTryOut('GETapi-file_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-file_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/file_tags</code></b>
</p>
</form>


## Store a newly created FileTag in storage.


POST /fileTags

> Example request:

```bash
curl -X POST \
    "http://localhost/api/file_tags" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":13,"tag_id":12,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/file_tags"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 13,
    "tag_id": 12,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-file_tags" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-file_tags"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-file_tags"></code></pre>
</div>
<div id="execution-error-POSTapi-file_tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-file_tags"></code></pre>
</div>
<form id="form-POSTapi-file_tags" data-method="POST" data-path="api/file_tags" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-file_tags', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-file_tags" onclick="tryItOut('POSTapi-file_tags');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-file_tags" onclick="cancelTryOut('POSTapi-file_tags');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-file_tags" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/file_tags</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="POSTapi-file_tags" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="POSTapi-file_tags" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-file_tags" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-file_tags" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified FileTag.


GET|HEAD /fileTags/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/file_tags/reprehenderit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_tags/reprehenderit"
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
<div id="execution-results-GETapi-file_tags--file_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-file_tags--file_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-file_tags--file_tag-"></code></pre>
</div>
<div id="execution-error-GETapi-file_tags--file_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-file_tags--file_tag-"></code></pre>
</div>
<form id="form-GETapi-file_tags--file_tag-" data-method="GET" data-path="api/file_tags/{file_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-file_tags--file_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-file_tags--file_tag-" onclick="tryItOut('GETapi-file_tags--file_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-file_tags--file_tag-" onclick="cancelTryOut('GETapi-file_tags--file_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-file_tags--file_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/file_tags/{file_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_tag" data-endpoint="GETapi-file_tags--file_tag-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified FileTag in storage.


PUT/PATCH /fileTags/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/file_tags/harum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":10,"tag_id":2,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/file_tags/harum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 10,
    "tag_id": 2,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-file_tags--file_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-file_tags--file_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-file_tags--file_tag-"></code></pre>
</div>
<div id="execution-error-PUTapi-file_tags--file_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-file_tags--file_tag-"></code></pre>
</div>
<form id="form-PUTapi-file_tags--file_tag-" data-method="PUT" data-path="api/file_tags/{file_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-file_tags--file_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-file_tags--file_tag-" onclick="tryItOut('PUTapi-file_tags--file_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-file_tags--file_tag-" onclick="cancelTryOut('PUTapi-file_tags--file_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-file_tags--file_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/file_tags/{file_tag}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/file_tags/{file_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_tag" data-endpoint="PUTapi-file_tags--file_tag-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="PUTapi-file_tags--file_tag-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tag_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tag_id" data-endpoint="PUTapi-file_tags--file_tag-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-file_tags--file_tag-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-file_tags--file_tag-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified FileTag from storage.


DELETE /fileTags/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/file_tags/repudiandae" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_tags/repudiandae"
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


<div id="execution-results-DELETEapi-file_tags--file_tag-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-file_tags--file_tag-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-file_tags--file_tag-"></code></pre>
</div>
<div id="execution-error-DELETEapi-file_tags--file_tag-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-file_tags--file_tag-"></code></pre>
</div>
<form id="form-DELETEapi-file_tags--file_tag-" data-method="DELETE" data-path="api/file_tags/{file_tag}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-file_tags--file_tag-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-file_tags--file_tag-" onclick="tryItOut('DELETEapi-file_tags--file_tag-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-file_tags--file_tag-" onclick="cancelTryOut('DELETEapi-file_tags--file_tag-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-file_tags--file_tag-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/file_tags/{file_tag}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_tag</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_tag" data-endpoint="DELETEapi-file_tags--file_tag-" data-component="url" required  hidden>
<br>
</p>
</form>



