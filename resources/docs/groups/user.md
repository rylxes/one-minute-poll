# User


## My Activities.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/myActivities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/myActivities"
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
<div id="execution-results-GETapi-users-myActivities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users-myActivities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-myActivities"></code></pre>
</div>
<div id="execution-error-GETapi-users-myActivities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-myActivities"></code></pre>
</div>
<form id="form-GETapi-users-myActivities" data-method="GET" data-path="api/users/myActivities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users-myActivities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users-myActivities" onclick="tryItOut('GETapi-users-myActivities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users-myActivities" onclick="cancelTryOut('GETapi-users-myActivities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users-myActivities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/myActivities</code></b>
</p>
</form>


## Add User to Group.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/users/shareToGroup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"group_id":"quo","user_id":"eos"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/shareToGroup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "group_id": "quo",
    "user_id": "eos"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users-shareToGroup" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users-shareToGroup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-shareToGroup"></code></pre>
</div>
<div id="execution-error-POSTapi-users-shareToGroup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-shareToGroup"></code></pre>
</div>
<form id="form-POSTapi-users-shareToGroup" data-method="POST" data-path="api/users/shareToGroup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-shareToGroup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-users-shareToGroup" onclick="tryItOut('POSTapi-users-shareToGroup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-users-shareToGroup" onclick="cancelTryOut('POSTapi-users-shareToGroup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-users-shareToGroup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/shareToGroup</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>group_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group_id" data-endpoint="POSTapi-users-shareToGroup" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-users-shareToGroup" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove User to Group.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/users/removeToGroup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"group_id":"nisi","user_id":"excepturi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/removeToGroup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "group_id": "nisi",
    "user_id": "excepturi"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users-removeToGroup" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users-removeToGroup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-removeToGroup"></code></pre>
</div>
<div id="execution-error-POSTapi-users-removeToGroup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-removeToGroup"></code></pre>
</div>
<form id="form-POSTapi-users-removeToGroup" data-method="POST" data-path="api/users/removeToGroup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-removeToGroup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-users-removeToGroup" onclick="tryItOut('POSTapi-users-removeToGroup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-users-removeToGroup" onclick="cancelTryOut('POSTapi-users-removeToGroup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-users-removeToGroup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/removeToGroup</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>group_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group_id" data-endpoint="POSTapi-users-removeToGroup" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-users-removeToGroup" data-component="body" required  hidden>
<br>
</p>

</form>


## Add User to Group with Comma seperated Email.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/users/shareGroupWithEmail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"group_id":"ipsum","email":"ab"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/shareGroupWithEmail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "group_id": "ipsum",
    "email": "ab"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users-shareGroupWithEmail" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users-shareGroupWithEmail"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-shareGroupWithEmail"></code></pre>
</div>
<div id="execution-error-POSTapi-users-shareGroupWithEmail" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-shareGroupWithEmail"></code></pre>
</div>
<form id="form-POSTapi-users-shareGroupWithEmail" data-method="POST" data-path="api/users/shareGroupWithEmail" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-shareGroupWithEmail', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-users-shareGroupWithEmail" onclick="tryItOut('POSTapi-users-shareGroupWithEmail');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-users-shareGroupWithEmail" onclick="cancelTryOut('POSTapi-users-shareGroupWithEmail');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-users-shareGroupWithEmail" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/shareGroupWithEmail</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>group_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group_id" data-endpoint="POSTapi-users-shareGroupWithEmail" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-users-shareGroupWithEmail" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove User to Group with Comma seperated Email.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/users/removeGroupWithEmail" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"group_id":"a","email":"similique"}'

```

```javascript
const url = new URL(
    "http://localhost/api/users/removeGroupWithEmail"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "group_id": "a",
    "email": "similique"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-users-removeGroupWithEmail" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-users-removeGroupWithEmail"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users-removeGroupWithEmail"></code></pre>
</div>
<div id="execution-error-POSTapi-users-removeGroupWithEmail" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users-removeGroupWithEmail"></code></pre>
</div>
<form id="form-POSTapi-users-removeGroupWithEmail" data-method="POST" data-path="api/users/removeGroupWithEmail" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-users-removeGroupWithEmail', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-users-removeGroupWithEmail" onclick="tryItOut('POSTapi-users-removeGroupWithEmail');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-users-removeGroupWithEmail" onclick="cancelTryOut('POSTapi-users-removeGroupWithEmail');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-users-removeGroupWithEmail" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/users/removeGroupWithEmail</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>group_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group_id" data-endpoint="POSTapi-users-removeGroupWithEmail" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-users-removeGroupWithEmail" data-component="body" required  hidden>
<br>
</p>

</form>


## Display a listing of the User.


GET|HEAD /users

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
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
<div id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"></code></pre>
</div>
<div id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users"></code></pre>
</div>
<form id="form-GETapi-users" data-method="GET" data-path="api/users" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users" onclick="tryItOut('GETapi-users');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users" onclick="cancelTryOut('GETapi-users');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users</code></b>
</p>
</form>


## Display the specified User.


GET|HEAD /users/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/doloribus"
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
<div id="execution-results-GETapi-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--user-"></code></pre>
</div>
<div id="execution-error-GETapi-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--user-"></code></pre>
</div>
<form id="form-GETapi-users--user-" data-method="GET" data-path="api/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-users--user-" onclick="tryItOut('GETapi-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-users--user-" onclick="cancelTryOut('GETapi-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="GETapi-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>


## Remove the specified User from storage.


DELETE /users/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/quisquam"
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


<div id="execution-results-DELETEapi-users--user-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-users--user-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--user-"></code></pre>
</div>
<div id="execution-error-DELETEapi-users--user-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--user-"></code></pre>
</div>
<form id="form-DELETEapi-users--user-" data-method="DELETE" data-path="api/users/{user}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--user-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-users--user-" onclick="tryItOut('DELETEapi-users--user-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-users--user-" onclick="cancelTryOut('DELETEapi-users--user-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-users--user-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/users/{user}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>user</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="user" data-endpoint="DELETEapi-users--user-" data-component="url" required  hidden>
<br>
</p>
</form>



