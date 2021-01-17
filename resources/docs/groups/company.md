# Company


## Display a listing of the Company.


GET|HEAD /companies

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/companies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/companies"
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
<div id="execution-results-GETapi-companies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-companies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-companies"></code></pre>
</div>
<div id="execution-error-GETapi-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-companies"></code></pre>
</div>
<form id="form-GETapi-companies" data-method="GET" data-path="api/companies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-companies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-companies" onclick="tryItOut('GETapi-companies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-companies" onclick="cancelTryOut('GETapi-companies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-companies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/companies</code></b>
</p>
</form>


## Store a newly created Company in storage.


POST /companies

> Example request:

```bash
curl -X POST \
    "http://localhost/api/companies" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"fuga","description":"ipsum","email":"voluptatem","phone":"veritatis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/companies"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "fuga",
    "description": "ipsum",
    "email": "voluptatem",
    "phone": "veritatis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-companies" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-companies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-companies"></code></pre>
</div>
<div id="execution-error-POSTapi-companies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-companies"></code></pre>
</div>
<form id="form-POSTapi-companies" data-method="POST" data-path="api/companies" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-companies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-companies" onclick="tryItOut('POSTapi-companies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-companies" onclick="cancelTryOut('POSTapi-companies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-companies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/companies</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-companies" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="POSTapi-companies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-companies" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-companies" data-component="body"  hidden>
<br>
</p>

</form>


## Display the specified Company.


GET|HEAD /companies/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/companies/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/companies/et"
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
<div id="execution-results-GETapi-companies--company-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-companies--company-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-companies--company-"></code></pre>
</div>
<div id="execution-error-GETapi-companies--company-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-companies--company-"></code></pre>
</div>
<form id="form-GETapi-companies--company-" data-method="GET" data-path="api/companies/{company}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-companies--company-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-companies--company-" onclick="tryItOut('GETapi-companies--company-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-companies--company-" onclick="cancelTryOut('GETapi-companies--company-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-companies--company-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/companies/{company}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>company</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company" data-endpoint="GETapi-companies--company-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Company in storage.


PUT/PATCH /companies/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/companies/ex" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"ipsa","description":"corporis","email":"voluptatem","phone":"minima"}'

```

```javascript
const url = new URL(
    "http://localhost/api/companies/ex"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ipsa",
    "description": "corporis",
    "email": "voluptatem",
    "phone": "minima"
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-companies--company-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-companies--company-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-companies--company-"></code></pre>
</div>
<div id="execution-error-PUTapi-companies--company-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-companies--company-"></code></pre>
</div>
<form id="form-PUTapi-companies--company-" data-method="PUT" data-path="api/companies/{company}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-companies--company-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-companies--company-" onclick="tryItOut('PUTapi-companies--company-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-companies--company-" onclick="cancelTryOut('PUTapi-companies--company-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-companies--company-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/companies/{company}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/companies/{company}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>company</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company" data-endpoint="PUTapi-companies--company-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-companies--company-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="description" data-endpoint="PUTapi-companies--company-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-companies--company-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-companies--company-" data-component="body"  hidden>
<br>
</p>

</form>


## Remove the specified Company from storage.


DELETE /companies/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/companies/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/companies/accusantium"
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


<div id="execution-results-DELETEapi-companies--company-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-companies--company-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-companies--company-"></code></pre>
</div>
<div id="execution-error-DELETEapi-companies--company-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-companies--company-"></code></pre>
</div>
<form id="form-DELETEapi-companies--company-" data-method="DELETE" data-path="api/companies/{company}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-companies--company-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-companies--company-" onclick="tryItOut('DELETEapi-companies--company-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-companies--company-" onclick="cancelTryOut('DELETEapi-companies--company-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-companies--company-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/companies/{company}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>company</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company" data-endpoint="DELETEapi-companies--company-" data-component="url" required  hidden>
<br>
</p>
</form>



