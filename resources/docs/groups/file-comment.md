# File Comment


## Display a listing of the FileComment.


GET|HEAD /fileComments

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/file_comments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_comments"
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
<div id="execution-results-GETapi-file_comments" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-file_comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-file_comments"></code></pre>
</div>
<div id="execution-error-GETapi-file_comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-file_comments"></code></pre>
</div>
<form id="form-GETapi-file_comments" data-method="GET" data-path="api/file_comments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-file_comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-file_comments" onclick="tryItOut('GETapi-file_comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-file_comments" onclick="cancelTryOut('GETapi-file_comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-file_comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/file_comments</code></b>
</p>
</form>


## Store a newly created FileComment in storage.


POST /fileComments

> Example request:

```bash
curl -X POST \
    "http://localhost/api/file_comments" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":15,"comment":"repudiandae"}'

```

```javascript
const url = new URL(
    "http://localhost/api/file_comments"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 15,
    "comment": "repudiandae"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-file_comments" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-file_comments"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-file_comments"></code></pre>
</div>
<div id="execution-error-POSTapi-file_comments" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-file_comments"></code></pre>
</div>
<form id="form-POSTapi-file_comments" data-method="POST" data-path="api/file_comments" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-file_comments', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-file_comments" onclick="tryItOut('POSTapi-file_comments');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-file_comments" onclick="cancelTryOut('POSTapi-file_comments');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-file_comments" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/file_comments</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="POSTapi-file_comments" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="POSTapi-file_comments" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified FileComment.


GET|HEAD /fileComments/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/file_comments/optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_comments/optio"
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
<div id="execution-results-GETapi-file_comments--file_comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-file_comments--file_comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-file_comments--file_comment-"></code></pre>
</div>
<div id="execution-error-GETapi-file_comments--file_comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-file_comments--file_comment-"></code></pre>
</div>
<form id="form-GETapi-file_comments--file_comment-" data-method="GET" data-path="api/file_comments/{file_comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-file_comments--file_comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-file_comments--file_comment-" onclick="tryItOut('GETapi-file_comments--file_comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-file_comments--file_comment-" onclick="cancelTryOut('GETapi-file_comments--file_comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-file_comments--file_comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/file_comments/{file_comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_comment" data-endpoint="GETapi-file_comments--file_comment-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified FileComment in storage.


PUT/PATCH /fileComments/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/file_comments/ducimus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"file_id":5,"comment":"dolorum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/file_comments/ducimus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "file_id": 5,
    "comment": "dolorum"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-file_comments--file_comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-file_comments--file_comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-file_comments--file_comment-"></code></pre>
</div>
<div id="execution-error-PUTapi-file_comments--file_comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-file_comments--file_comment-"></code></pre>
</div>
<form id="form-PUTapi-file_comments--file_comment-" data-method="PUT" data-path="api/file_comments/{file_comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-file_comments--file_comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-file_comments--file_comment-" onclick="tryItOut('PUTapi-file_comments--file_comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-file_comments--file_comment-" onclick="cancelTryOut('PUTapi-file_comments--file_comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-file_comments--file_comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/file_comments/{file_comment}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/file_comments/{file_comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_comment" data-endpoint="PUTapi-file_comments--file_comment-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="file_id" data-endpoint="PUTapi-file_comments--file_comment-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="comment" data-endpoint="PUTapi-file_comments--file_comment-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified FileComment from storage.


DELETE /fileComments/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/file_comments/laudantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/file_comments/laudantium"
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


<div id="execution-results-DELETEapi-file_comments--file_comment-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-file_comments--file_comment-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-file_comments--file_comment-"></code></pre>
</div>
<div id="execution-error-DELETEapi-file_comments--file_comment-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-file_comments--file_comment-"></code></pre>
</div>
<form id="form-DELETEapi-file_comments--file_comment-" data-method="DELETE" data-path="api/file_comments/{file_comment}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-file_comments--file_comment-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-file_comments--file_comment-" onclick="tryItOut('DELETEapi-file_comments--file_comment-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-file_comments--file_comment-" onclick="cancelTryOut('DELETEapi-file_comments--file_comment-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-file_comments--file_comment-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/file_comments/{file_comment}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>file_comment</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="file_comment" data-endpoint="DELETEapi-file_comments--file_comment-" data-component="url" required  hidden>
<br>
</p>
</form>



