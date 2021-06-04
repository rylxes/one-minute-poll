# Group


## Get All Groups for a User.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups/byUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/byUser"
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
<div id="execution-results-GETapi-groups-byUser" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups-byUser"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-byUser"></code></pre>
</div>
<div id="execution-error-GETapi-groups-byUser" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-byUser"></code></pre>
</div>
<form id="form-GETapi-groups-byUser" data-method="GET" data-path="api/groups/byUser" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-byUser', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups-byUser" onclick="tryItOut('GETapi-groups-byUser');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups-byUser" onclick="cancelTryOut('GETapi-groups-byUser');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups-byUser" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups/byUser</code></b>
</p>
</form>


## Get All Other Groups.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups/otherGroup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/otherGroup"
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
<div id="execution-results-GETapi-groups-otherGroup" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups-otherGroup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-otherGroup"></code></pre>
</div>
<div id="execution-error-GETapi-groups-otherGroup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-otherGroup"></code></pre>
</div>
<form id="form-GETapi-groups-otherGroup" data-method="GET" data-path="api/groups/otherGroup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-otherGroup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups-otherGroup" onclick="tryItOut('GETapi-groups-otherGroup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups-otherGroup" onclick="cancelTryOut('GETapi-groups-otherGroup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups-otherGroup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups/otherGroup</code></b>
</p>
</form>


## Get All Users in a Group.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups/allUsersInGroup/quos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/allUsersInGroup/quos"
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
<div id="execution-results-GETapi-groups-allUsersInGroup--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups-allUsersInGroup--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-allUsersInGroup--id-"></code></pre>
</div>
<div id="execution-error-GETapi-groups-allUsersInGroup--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-allUsersInGroup--id-"></code></pre>
</div>
<form id="form-GETapi-groups-allUsersInGroup--id-" data-method="GET" data-path="api/groups/allUsersInGroup/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-allUsersInGroup--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups-allUsersInGroup--id-" onclick="tryItOut('GETapi-groups-allUsersInGroup--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups-allUsersInGroup--id-" onclick="cancelTryOut('GETapi-groups-allUsersInGroup--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups-allUsersInGroup--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups/allUsersInGroup/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-groups-allUsersInGroup--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Get All My Groups.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups/myGroup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/myGroup"
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
<div id="execution-results-GETapi-groups-myGroup" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups-myGroup"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups-myGroup"></code></pre>
</div>
<div id="execution-error-GETapi-groups-myGroup" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups-myGroup"></code></pre>
</div>
<form id="form-GETapi-groups-myGroup" data-method="GET" data-path="api/groups/myGroup" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups-myGroup', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups-myGroup" onclick="tryItOut('GETapi-groups-myGroup');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups-myGroup" onclick="cancelTryOut('GETapi-groups-myGroup');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups-myGroup" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups/myGroup</code></b>
</p>
</form>


## Display a listing of the Group.


GET|HEAD /groups

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups"
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
<div id="execution-results-GETapi-groups" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups"></code></pre>
</div>
<div id="execution-error-GETapi-groups" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups"></code></pre>
</div>
<form id="form-GETapi-groups" data-method="GET" data-path="api/groups" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups" onclick="tryItOut('GETapi-groups');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups" onclick="cancelTryOut('GETapi-groups');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups</code></b>
</p>
</form>


## Store a newly created Group in storage.


POST /groups

> Example request:

```bash
curl -X POST \
    "http://localhost/api/groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"architecto","description":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/groups"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "description": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-groups" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-groups"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-groups"></code></pre>
</div>
<div id="execution-error-POSTapi-groups" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-groups"></code></pre>
</div>
<form id="form-POSTapi-groups" data-method="POST" data-path="api/groups" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-groups', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-groups" onclick="tryItOut('POSTapi-groups');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-groups" onclick="cancelTryOut('POSTapi-groups');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-groups" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/groups</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-groups" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-groups" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Group.


GET|HEAD /groups/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/groups/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/minus"
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
<div id="execution-results-GETapi-groups--group-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-groups--group-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-groups--group-"></code></pre>
</div>
<div id="execution-error-GETapi-groups--group-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-groups--group-"></code></pre>
</div>
<form id="form-GETapi-groups--group-" data-method="GET" data-path="api/groups/{group}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-groups--group-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-groups--group-" onclick="tryItOut('GETapi-groups--group-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-groups--group-" onclick="cancelTryOut('GETapi-groups--group-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-groups--group-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/groups/{group}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>group</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group" data-endpoint="GETapi-groups--group-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Group in storage.


PUT/PATCH /groups/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/groups/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quaerat","description":"soluta"}'

```

```javascript
const url = new URL(
    "http://localhost/api/groups/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quaerat",
    "description": "soluta"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-groups--group-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-groups--group-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-groups--group-"></code></pre>
</div>
<div id="execution-error-PUTapi-groups--group-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-groups--group-"></code></pre>
</div>
<form id="form-PUTapi-groups--group-" data-method="PUT" data-path="api/groups/{group}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-groups--group-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-groups--group-" onclick="tryItOut('PUTapi-groups--group-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-groups--group-" onclick="cancelTryOut('PUTapi-groups--group-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-groups--group-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/groups/{group}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/groups/{group}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>group</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group" data-endpoint="PUTapi-groups--group-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-groups--group-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-groups--group-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Group from storage.


DELETE /groups/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/groups/excepturi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/groups/excepturi"
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


<div id="execution-results-DELETEapi-groups--group-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-groups--group-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-groups--group-"></code></pre>
</div>
<div id="execution-error-DELETEapi-groups--group-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-groups--group-"></code></pre>
</div>
<form id="form-DELETEapi-groups--group-" data-method="DELETE" data-path="api/groups/{group}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-groups--group-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-groups--group-" onclick="tryItOut('DELETEapi-groups--group-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-groups--group-" onclick="cancelTryOut('DELETEapi-groups--group-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-groups--group-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/groups/{group}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>group</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="group" data-endpoint="DELETEapi-groups--group-" data-component="url" required  hidden>
<br>
</p>
</form>



