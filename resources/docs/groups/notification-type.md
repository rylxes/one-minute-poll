# Notification Type


## Display a listing of the NotificationType.


GET|HEAD /notificationTypes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/notification_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notification_types"
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
<div id="execution-results-GETapi-notification_types" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-notification_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notification_types"></code></pre>
</div>
<div id="execution-error-GETapi-notification_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notification_types"></code></pre>
</div>
<form id="form-GETapi-notification_types" data-method="GET" data-path="api/notification_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-notification_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-notification_types" onclick="tryItOut('GETapi-notification_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-notification_types" onclick="cancelTryOut('GETapi-notification_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-notification_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/notification_types</code></b>
</p>
</form>


## Store a newly created NotificationType in storage.


POST /notificationTypes

> Example request:

```bash
curl -X POST \
    "http://localhost/api/notification_types" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"enim","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/notification_types"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "enim",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-notification_types" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-notification_types"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notification_types"></code></pre>
</div>
<div id="execution-error-POSTapi-notification_types" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notification_types"></code></pre>
</div>
<form id="form-POSTapi-notification_types" data-method="POST" data-path="api/notification_types" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-notification_types', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-notification_types" onclick="tryItOut('POSTapi-notification_types');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-notification_types" onclick="cancelTryOut('POSTapi-notification_types');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-notification_types" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/notification_types</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-notification_types" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-notification_types" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-notification_types" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified NotificationType.


GET|HEAD /notificationTypes/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/notification_types/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notification_types/qui"
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
<div id="execution-results-GETapi-notification_types--notification_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-notification_types--notification_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notification_types--notification_type-"></code></pre>
</div>
<div id="execution-error-GETapi-notification_types--notification_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notification_types--notification_type-"></code></pre>
</div>
<form id="form-GETapi-notification_types--notification_type-" data-method="GET" data-path="api/notification_types/{notification_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-notification_types--notification_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-notification_types--notification_type-" onclick="tryItOut('GETapi-notification_types--notification_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-notification_types--notification_type-" onclick="cancelTryOut('GETapi-notification_types--notification_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-notification_types--notification_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/notification_types/{notification_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification_type" data-endpoint="GETapi-notification_types--notification_type-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified NotificationType in storage.


PUT/PATCH /notificationTypes/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/notification_types/fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/notification_types/fuga"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-notification_types--notification_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-notification_types--notification_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-notification_types--notification_type-"></code></pre>
</div>
<div id="execution-error-PUTapi-notification_types--notification_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-notification_types--notification_type-"></code></pre>
</div>
<form id="form-PUTapi-notification_types--notification_type-" data-method="PUT" data-path="api/notification_types/{notification_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-notification_types--notification_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-notification_types--notification_type-" onclick="tryItOut('PUTapi-notification_types--notification_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-notification_types--notification_type-" onclick="cancelTryOut('PUTapi-notification_types--notification_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-notification_types--notification_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/notification_types/{notification_type}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/notification_types/{notification_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification_type" data-endpoint="PUTapi-notification_types--notification_type-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-notification_types--notification_type-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-notification_types--notification_type-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-notification_types--notification_type-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified NotificationType from storage.


DELETE /notificationTypes/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/notification_types/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notification_types/fugiat"
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


<div id="execution-results-DELETEapi-notification_types--notification_type-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-notification_types--notification_type-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-notification_types--notification_type-"></code></pre>
</div>
<div id="execution-error-DELETEapi-notification_types--notification_type-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-notification_types--notification_type-"></code></pre>
</div>
<form id="form-DELETEapi-notification_types--notification_type-" data-method="DELETE" data-path="api/notification_types/{notification_type}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-notification_types--notification_type-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-notification_types--notification_type-" onclick="tryItOut('DELETEapi-notification_types--notification_type-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-notification_types--notification_type-" onclick="cancelTryOut('DELETEapi-notification_types--notification_type-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-notification_types--notification_type-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/notification_types/{notification_type}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification_type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification_type" data-endpoint="DELETEapi-notification_types--notification_type-" data-component="url" required  hidden>
<br>
</p>
</form>



