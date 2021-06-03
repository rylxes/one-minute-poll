# Profile


## Display a listing of the Profile.


GET|HEAD /profiles

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/profiles"
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
<div id="execution-results-GETapi-profiles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-profiles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profiles"></code></pre>
</div>
<div id="execution-error-GETapi-profiles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profiles"></code></pre>
</div>
<form id="form-GETapi-profiles" data-method="GET" data-path="api/profiles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-profiles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-profiles" onclick="tryItOut('GETapi-profiles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-profiles" onclick="cancelTryOut('GETapi-profiles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-profiles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/profiles</code></b>
</p>
</form>


## Store a newly created Profile in storage.


POST /profiles

> Example request:

```bash
curl -X POST \
    "http://localhost/api/profiles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"officia","last_name":"quia","user_id":8,"avatar":"ea"}'

```

```javascript
const url = new URL(
    "http://localhost/api/profiles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "officia",
    "last_name": "quia",
    "user_id": 8,
    "avatar": "ea"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-profiles" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-profiles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profiles"></code></pre>
</div>
<div id="execution-error-POSTapi-profiles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profiles"></code></pre>
</div>
<form id="form-POSTapi-profiles" data-method="POST" data-path="api/profiles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-profiles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-profiles" onclick="tryItOut('POSTapi-profiles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-profiles" onclick="cancelTryOut('POSTapi-profiles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-profiles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/profiles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="POSTapi-profiles" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>avatar</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="avatar" data-endpoint="POSTapi-profiles" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Profile.


GET|HEAD /profiles/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/profiles/quod" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/profiles/quod"
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
<div id="execution-results-GETapi-profiles--profile-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-profiles--profile-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profiles--profile-"></code></pre>
</div>
<div id="execution-error-GETapi-profiles--profile-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profiles--profile-"></code></pre>
</div>
<form id="form-GETapi-profiles--profile-" data-method="GET" data-path="api/profiles/{profile}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-profiles--profile-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-profiles--profile-" onclick="tryItOut('GETapi-profiles--profile-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-profiles--profile-" onclick="cancelTryOut('GETapi-profiles--profile-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-profiles--profile-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/profiles/{profile}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>profile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="profile" data-endpoint="GETapi-profiles--profile-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Profile in storage.


PUT/PATCH /profiles/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/profiles/reiciendis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"omnis","last_name":"placeat","user_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/profiles/reiciendis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "omnis",
    "last_name": "placeat",
    "user_id": 18
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-profiles--profile-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-profiles--profile-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-profiles--profile-"></code></pre>
</div>
<div id="execution-error-PUTapi-profiles--profile-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-profiles--profile-"></code></pre>
</div>
<form id="form-PUTapi-profiles--profile-" data-method="PUT" data-path="api/profiles/{profile}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-profiles--profile-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-profiles--profile-" onclick="tryItOut('PUTapi-profiles--profile-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-profiles--profile-" onclick="cancelTryOut('PUTapi-profiles--profile-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-profiles--profile-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/profiles/{profile}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/profiles/{profile}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>profile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="profile" data-endpoint="PUTapi-profiles--profile-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-profiles--profile-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-profiles--profile-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="user_id" data-endpoint="PUTapi-profiles--profile-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified Profile from storage.


DELETE /profiles/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/profiles/aut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/profiles/aut"
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


<div id="execution-results-DELETEapi-profiles--profile-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-profiles--profile-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-profiles--profile-"></code></pre>
</div>
<div id="execution-error-DELETEapi-profiles--profile-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-profiles--profile-"></code></pre>
</div>
<form id="form-DELETEapi-profiles--profile-" data-method="DELETE" data-path="api/profiles/{profile}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-profiles--profile-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-profiles--profile-" onclick="tryItOut('DELETEapi-profiles--profile-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-profiles--profile-" onclick="cancelTryOut('DELETEapi-profiles--profile-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-profiles--profile-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/profiles/{profile}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>profile</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="profile" data-endpoint="DELETEapi-profiles--profile-" data-component="url" required  hidden>
<br>
</p>
</form>



