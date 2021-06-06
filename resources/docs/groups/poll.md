# Poll


## Display a listing of the Poll.


GET|HEAD /polls

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/polls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/polls"
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
<div id="execution-results-GETapi-polls" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-polls"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-polls"></code></pre>
</div>
<div id="execution-error-GETapi-polls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-polls"></code></pre>
</div>
<form id="form-GETapi-polls" data-method="GET" data-path="api/polls" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-polls', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-polls" onclick="tryItOut('GETapi-polls');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-polls" onclick="cancelTryOut('GETapi-polls');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-polls" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/polls</code></b>
</p>
</form>


## Store a newly created Poll in storage.


POST /polls

> Example request:

```bash
curl -X POST \
    "http://localhost/api/polls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"dolor","url":"accusamus","code":"molestias","category_id":17,"user_id":1,"poll_type_id":13,"open_to_everyone":"repudiandae","question":"ut","close_date":{},"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/polls"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "dolor",
    "url": "accusamus",
    "code": "molestias",
    "category_id": 17,
    "user_id": 1,
    "poll_type_id": 13,
    "open_to_everyone": "repudiandae",
    "question": "ut",
    "close_date": {},
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-polls" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-polls"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-polls"></code></pre>
</div>
<div id="execution-error-POSTapi-polls" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-polls"></code></pre>
</div>
<form id="form-POSTapi-polls" data-method="POST" data-path="api/polls" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-polls', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-polls" onclick="tryItOut('POSTapi-polls');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-polls" onclick="cancelTryOut('POSTapi-polls');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-polls" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/polls</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="url" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>open_to_everyone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="open_to_everyone" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="POSTapi-polls" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>close_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="close_date" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-polls" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified Poll.


GET|HEAD /polls/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/polls/deleniti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/polls/deleniti"
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
<div id="execution-results-GETapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-GETapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-polls--poll-"></code></pre>
</div>
<form id="form-GETapi-polls--poll-" data-method="GET" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-polls--poll-" onclick="tryItOut('GETapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-polls--poll-" onclick="cancelTryOut('GETapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="GETapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified Poll in storage.


PUT/PATCH /polls/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/polls/architecto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"voluptas","url":"cumque","code":"minima","category_id":18,"user_id":5,"poll_type_id":11,"open_to_everyone":"id","question":"deleniti","close_date":{},"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/polls/architecto"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "voluptas",
    "url": "cumque",
    "code": "minima",
    "category_id": 18,
    "user_id": 5,
    "poll_type_id": 11,
    "open_to_everyone": "id",
    "question": "deleniti",
    "close_date": {},
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-PUTapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-polls--poll-"></code></pre>
</div>
<form id="form-PUTapi-polls--poll-" data-method="PUT" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-polls--poll-" onclick="tryItOut('PUTapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-polls--poll-" onclick="cancelTryOut('PUTapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="PUTapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="title" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="url" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>code</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="code" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>category_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="category_id" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>poll_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="poll_type_id" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>open_to_everyone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="open_to_everyone" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>question</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="question" data-endpoint="PUTapi-polls--poll-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>close_date</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="close_date" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-polls--poll-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified Poll from storage.


DELETE /polls/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/polls/eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/polls/eveniet"
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


<div id="execution-results-DELETEapi-polls--poll-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-polls--poll-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-polls--poll-"></code></pre>
</div>
<div id="execution-error-DELETEapi-polls--poll-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-polls--poll-"></code></pre>
</div>
<form id="form-DELETEapi-polls--poll-" data-method="DELETE" data-path="api/polls/{poll}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-polls--poll-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-polls--poll-" onclick="tryItOut('DELETEapi-polls--poll-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-polls--poll-" onclick="cancelTryOut('DELETEapi-polls--poll-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-polls--poll-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/polls/{poll}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>poll</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="poll" data-endpoint="DELETEapi-polls--poll-" data-component="url" required  hidden>
<br>

</p>
</form>



