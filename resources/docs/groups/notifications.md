# Notifications


## Display a listing of the Notifications.


GET|HEAD /notifications

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/notifications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notifications"
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
<div id="execution-results-GETapi-notifications" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-notifications"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications"></code></pre>
</div>
<div id="execution-error-GETapi-notifications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications"></code></pre>
</div>
<form id="form-GETapi-notifications" data-method="GET" data-path="api/notifications" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-notifications" onclick="tryItOut('GETapi-notifications');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-notifications" onclick="cancelTryOut('GETapi-notifications');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-notifications" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/notifications</code></b>
</p>
</form>


## Store a newly created Notifications in storage.


POST /notifications

> Example request:

```bash
curl -X POST \
    "http://localhost/api/notifications" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"notification_type_id":14,"user_id":18,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/notifications"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "notification_type_id": 14,
    "user_id": 18,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-notifications" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-notifications"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-notifications"></code></pre>
</div>
<div id="execution-error-POSTapi-notifications" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-notifications"></code></pre>
</div>
<form id="form-POSTapi-notifications" data-method="POST" data-path="api/notifications" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-notifications', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-notifications" onclick="tryItOut('POSTapi-notifications');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-notifications" onclick="cancelTryOut('POSTapi-notifications');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-notifications" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/notifications</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>notification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="notification_type_id" data-endpoint="POSTapi-notifications" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-notifications" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-notifications" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-notifications" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Notifications.


GET|HEAD /notifications/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/notifications/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notifications/consequatur"
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
<div id="execution-results-GETapi-notifications--notification-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-notifications--notification-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-notifications--notification-"></code></pre>
</div>
<div id="execution-error-GETapi-notifications--notification-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-notifications--notification-"></code></pre>
</div>
<form id="form-GETapi-notifications--notification-" data-method="GET" data-path="api/notifications/{notification}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-notifications--notification-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-notifications--notification-" onclick="tryItOut('GETapi-notifications--notification-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-notifications--notification-" onclick="cancelTryOut('GETapi-notifications--notification-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-notifications--notification-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/notifications/{notification}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification" data-endpoint="GETapi-notifications--notification-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Notifications in storage.


PUT/PATCH /notifications/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/notifications/amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"notification_type_id":12,"user_id":17,"created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/notifications/amet"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "notification_type_id": 12,
    "user_id": 17,
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-notifications--notification-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-notifications--notification-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-notifications--notification-"></code></pre>
</div>
<div id="execution-error-PUTapi-notifications--notification-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-notifications--notification-"></code></pre>
</div>
<form id="form-PUTapi-notifications--notification-" data-method="PUT" data-path="api/notifications/{notification}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-notifications--notification-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-notifications--notification-" onclick="tryItOut('PUTapi-notifications--notification-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-notifications--notification-" onclick="cancelTryOut('PUTapi-notifications--notification-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-notifications--notification-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/notifications/{notification}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/notifications/{notification}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification" data-endpoint="PUTapi-notifications--notification-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>notification_type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="notification_type_id" data-endpoint="PUTapi-notifications--notification-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-notifications--notification-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-notifications--notification-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-notifications--notification-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Notifications from storage.


DELETE /notifications/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/notifications/deserunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/notifications/deserunt"
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


<div id="execution-results-DELETEapi-notifications--notification-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-notifications--notification-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-notifications--notification-"></code></pre>
</div>
<div id="execution-error-DELETEapi-notifications--notification-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-notifications--notification-"></code></pre>
</div>
<form id="form-DELETEapi-notifications--notification-" data-method="DELETE" data-path="api/notifications/{notification}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-notifications--notification-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-notifications--notification-" onclick="tryItOut('DELETEapi-notifications--notification-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-notifications--notification-" onclick="cancelTryOut('DELETEapi-notifications--notification-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-notifications--notification-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/notifications/{notification}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>notification</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="notification" data-endpoint="DELETEapi-notifications--notification-" data-component="url" required  hidden>
<br>
</p>
</form>



