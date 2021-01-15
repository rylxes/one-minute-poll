# Library


## Display a listing of the Library.


GET|HEAD /libraries

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/libraries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/libraries"
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
<div id="execution-results-GETapi-libraries" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-libraries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libraries"></code></pre>
</div>
<div id="execution-error-GETapi-libraries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libraries"></code></pre>
</div>
<form id="form-GETapi-libraries" data-method="GET" data-path="api/libraries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-libraries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-libraries" onclick="tryItOut('GETapi-libraries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-libraries" onclick="cancelTryOut('GETapi-libraries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-libraries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/libraries</code></b>
</p>
</form>


## Store a newly created Library in storage.


POST /libraries

> Example request:

```bash
curl -X POST \
    "http://localhost/api/libraries" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sunt","description":"voluptatem","password":"voluptas","company_id":19,"is_encrypted":false,"is_favourite":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/libraries"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sunt",
    "description": "voluptatem",
    "password": "voluptas",
    "company_id": 19,
    "is_encrypted": false,
    "is_favourite": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-libraries" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-libraries"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-libraries"></code></pre>
</div>
<div id="execution-error-POSTapi-libraries" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-libraries"></code></pre>
</div>
<form id="form-POSTapi-libraries" data-method="POST" data-path="api/libraries" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-libraries', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-libraries" onclick="tryItOut('POSTapi-libraries');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-libraries" onclick="cancelTryOut('POSTapi-libraries');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-libraries" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/libraries</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-libraries" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-libraries" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-libraries" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="POSTapi-libraries" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_encrypted</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-libraries" hidden><input type="radio" name="is_encrypted" value="true" data-endpoint="POSTapi-libraries" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-libraries" hidden><input type="radio" name="is_encrypted" value="false" data-endpoint="POSTapi-libraries" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-libraries" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="POSTapi-libraries" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-libraries" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="POSTapi-libraries" data-component="body" required ><code>false</code></label>
<br>
</p>

</form>


## Display the specified Library.


GET|HEAD /libraries/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/libraries/quisquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/libraries/quisquam"
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
<div id="execution-results-GETapi-libraries--library-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-libraries--library-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-libraries--library-"></code></pre>
</div>
<div id="execution-error-GETapi-libraries--library-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-libraries--library-"></code></pre>
</div>
<form id="form-GETapi-libraries--library-" data-method="GET" data-path="api/libraries/{library}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-libraries--library-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-libraries--library-" onclick="tryItOut('GETapi-libraries--library-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-libraries--library-" onclick="cancelTryOut('GETapi-libraries--library-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-libraries--library-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/libraries/{library}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>library</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library" data-endpoint="GETapi-libraries--library-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Library in storage.


PUT/PATCH /libraries/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/libraries/tempora" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ab","description":"et","password":"molestias","company_id":13,"is_encrypted":false,"is_favourite":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/libraries/tempora"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ab",
    "description": "et",
    "password": "molestias",
    "company_id": 13,
    "is_encrypted": false,
    "is_favourite": false
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-libraries--library-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-libraries--library-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-libraries--library-"></code></pre>
</div>
<div id="execution-error-PUTapi-libraries--library-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-libraries--library-"></code></pre>
</div>
<form id="form-PUTapi-libraries--library-" data-method="PUT" data-path="api/libraries/{library}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-libraries--library-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-libraries--library-" onclick="tryItOut('PUTapi-libraries--library-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-libraries--library-" onclick="cancelTryOut('PUTapi-libraries--library-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-libraries--library-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/libraries/{library}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/libraries/{library}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>library</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library" data-endpoint="PUTapi-libraries--library-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-libraries--library-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-libraries--library-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="PUTapi-libraries--library-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="PUTapi-libraries--library-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>is_encrypted</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-libraries--library-" hidden><input type="radio" name="is_encrypted" value="true" data-endpoint="PUTapi-libraries--library-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-libraries--library-" hidden><input type="radio" name="is_encrypted" value="false" data-endpoint="PUTapi-libraries--library-" data-component="body" required ><code>false</code></label>
<br>
</p>
<p>
<b><code>is_favourite</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTapi-libraries--library-" hidden><input type="radio" name="is_favourite" value="true" data-endpoint="PUTapi-libraries--library-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTapi-libraries--library-" hidden><input type="radio" name="is_favourite" value="false" data-endpoint="PUTapi-libraries--library-" data-component="body" required ><code>false</code></label>
<br>
</p>

</form>


## Remove the specified Library from storage.


DELETE /libraries/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/libraries/omnis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/libraries/omnis"
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


<div id="execution-results-DELETEapi-libraries--library-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-libraries--library-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-libraries--library-"></code></pre>
</div>
<div id="execution-error-DELETEapi-libraries--library-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-libraries--library-"></code></pre>
</div>
<form id="form-DELETEapi-libraries--library-" data-method="DELETE" data-path="api/libraries/{library}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-libraries--library-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-libraries--library-" onclick="tryItOut('DELETEapi-libraries--library-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-libraries--library-" onclick="cancelTryOut('DELETEapi-libraries--library-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-libraries--library-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/libraries/{library}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>library</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library" data-endpoint="DELETEapi-libraries--library-" data-component="url" required  hidden>
<br>
</p>
</form>


## Validate Library&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/libraries/validate" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"aut","library_id":"laudantium"}'

```

```javascript
const url = new URL(
    "http://localhost/api/libraries/validate"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "aut",
    "library_id": "laudantium"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-libraries-validate" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-libraries-validate"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-libraries-validate"></code></pre>
</div>
<div id="execution-error-POSTapi-libraries-validate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-libraries-validate"></code></pre>
</div>
<form id="form-POSTapi-libraries-validate" data-method="POST" data-path="api/libraries/validate" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-libraries-validate', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-libraries-validate" onclick="tryItOut('POSTapi-libraries-validate');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-libraries-validate" onclick="cancelTryOut('POSTapi-libraries-validate');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-libraries-validate" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/libraries/validate</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTapi-libraries-validate" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>library_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="library_id" data-endpoint="POSTapi-libraries-validate" data-component="body" required  hidden>
<br>
</p>

</form>



