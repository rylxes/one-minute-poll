# Endpoints


## Authorize a client to access the user&#039;s account.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
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
<div id="execution-results-GEToauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-authorize"></code></pre>
</div>
<div id="execution-error-GEToauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-authorize"></code></pre>
</div>
<form id="form-GEToauth-authorize" data-method="GET" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-authorize" onclick="tryItOut('GEToauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-authorize" onclick="cancelTryOut('GEToauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Approve the authorization request.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-authorize"></code></pre>
</div>
<div id="execution-error-POSToauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-authorize"></code></pre>
</div>
<form id="form-POSToauth-authorize" data-method="POST" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-authorize" onclick="tryItOut('POSToauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-authorize" onclick="cancelTryOut('POSToauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Deny the authorization request.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
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


<div id="execution-results-DELETEoauth-authorize" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-authorize"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-authorize"></code></pre>
</div>
<div id="execution-error-DELETEoauth-authorize" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-authorize"></code></pre>
</div>
<form id="form-DELETEoauth-authorize" data-method="DELETE" data-path="oauth/authorize" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-authorize', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-authorize" onclick="tryItOut('DELETEoauth-authorize');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-authorize" onclick="cancelTryOut('DELETEoauth-authorize');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-authorize" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/authorize</code></b>
</p>
</form>


## Authorize a client to access the user&#039;s account.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-token"></code></pre>
</div>
<div id="execution-error-POSToauth-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-token"></code></pre>
</div>
<form id="form-POSToauth-token" data-method="POST" data-path="oauth/token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-token" onclick="tryItOut('POSToauth-token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-token" onclick="cancelTryOut('POSToauth-token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/token</code></b>
</p>
</form>


## Get all of the authorized tokens for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
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
<div id="execution-results-GEToauth-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-tokens"></code></pre>
</div>
<div id="execution-error-GEToauth-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-tokens"></code></pre>
</div>
<form id="form-GEToauth-tokens" data-method="GET" data-path="oauth/tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-tokens" onclick="tryItOut('GEToauth-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-tokens" onclick="cancelTryOut('GEToauth-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/tokens</code></b>
</p>
</form>


## Delete the given token.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/eos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/eos"
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


<div id="execution-results-DELETEoauth-tokens--token_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-tokens--token_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-tokens--token_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-tokens--token_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-tokens--token_id-"></code></pre>
</div>
<form id="form-DELETEoauth-tokens--token_id-" data-method="DELETE" data-path="oauth/tokens/{token_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-tokens--token_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-tokens--token_id-" onclick="tryItOut('DELETEoauth-tokens--token_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-tokens--token_id-" onclick="cancelTryOut('DELETEoauth-tokens--token_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-tokens--token_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/tokens/{token_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token_id" data-endpoint="DELETEoauth-tokens--token_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Get a fresh transient token cookie for the authenticated user.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-token-refresh" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-token-refresh"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-token-refresh"></code></pre>
</div>
<div id="execution-error-POSToauth-token-refresh" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-token-refresh"></code></pre>
</div>
<form id="form-POSToauth-token-refresh" data-method="POST" data-path="oauth/token/refresh" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-token-refresh', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-token-refresh" onclick="tryItOut('POSToauth-token-refresh');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-token-refresh" onclick="cancelTryOut('POSToauth-token-refresh');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-token-refresh" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/token/refresh</code></b>
</p>
</form>


## Get all of the clients for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
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
<div id="execution-results-GEToauth-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-clients"></code></pre>
</div>
<div id="execution-error-GEToauth-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-clients"></code></pre>
</div>
<form id="form-GEToauth-clients" data-method="GET" data-path="oauth/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-clients" onclick="tryItOut('GEToauth-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-clients" onclick="cancelTryOut('GEToauth-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/clients</code></b>
</p>
</form>


## Store a new client.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-clients" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-clients"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-clients"></code></pre>
</div>
<div id="execution-error-POSToauth-clients" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-clients"></code></pre>
</div>
<form id="form-POSToauth-clients" data-method="POST" data-path="oauth/clients" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-clients', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-clients" onclick="tryItOut('POSToauth-clients');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-clients" onclick="cancelTryOut('POSToauth-clients');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-clients" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/clients</code></b>
</p>
</form>


## Update the given client.




> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUToauth-clients--client_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUToauth-clients--client_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUToauth-clients--client_id-"></code></pre>
</div>
<div id="execution-error-PUToauth-clients--client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUToauth-clients--client_id-"></code></pre>
</div>
<form id="form-PUToauth-clients--client_id-" data-method="PUT" data-path="oauth/clients/{client_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUToauth-clients--client_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUToauth-clients--client_id-" onclick="tryItOut('PUToauth-clients--client_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUToauth-clients--client_id-" onclick="cancelTryOut('PUToauth-clients--client_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUToauth-clients--client_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>oauth/clients/{client_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client_id" data-endpoint="PUToauth-clients--client_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Delete the given client.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/rerum"
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


<div id="execution-results-DELETEoauth-clients--client_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-clients--client_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-clients--client_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-clients--client_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-clients--client_id-"></code></pre>
</div>
<form id="form-DELETEoauth-clients--client_id-" data-method="DELETE" data-path="oauth/clients/{client_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-clients--client_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-clients--client_id-" onclick="tryItOut('DELETEoauth-clients--client_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-clients--client_id-" onclick="cancelTryOut('DELETEoauth-clients--client_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-clients--client_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/clients/{client_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>client_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="client_id" data-endpoint="DELETEoauth-clients--client_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Get all of the available scopes for the application.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
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
<div id="execution-results-GEToauth-scopes" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-scopes"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-scopes"></code></pre>
</div>
<div id="execution-error-GEToauth-scopes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-scopes"></code></pre>
</div>
<form id="form-GEToauth-scopes" data-method="GET" data-path="oauth/scopes" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-scopes', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-scopes" onclick="tryItOut('GEToauth-scopes');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-scopes" onclick="cancelTryOut('GEToauth-scopes');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-scopes" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/scopes</code></b>
</p>
</form>


## Get all of the personal access tokens for the authenticated user.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
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
<div id="execution-results-GEToauth-personal-access-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-GEToauth-personal-access-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEToauth-personal-access-tokens"></code></pre>
</div>
<div id="execution-error-GEToauth-personal-access-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEToauth-personal-access-tokens"></code></pre>
</div>
<form id="form-GEToauth-personal-access-tokens" data-method="GET" data-path="oauth/personal-access-tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEToauth-personal-access-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEToauth-personal-access-tokens" onclick="tryItOut('GEToauth-personal-access-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEToauth-personal-access-tokens" onclick="cancelTryOut('GEToauth-personal-access-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEToauth-personal-access-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>oauth/personal-access-tokens</code></b>
</p>
</form>


## Create a new personal access token for the user.




> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSToauth-personal-access-tokens" hidden>
    <blockquote>Received response<span id="execution-response-status-POSToauth-personal-access-tokens"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSToauth-personal-access-tokens"></code></pre>
</div>
<div id="execution-error-POSToauth-personal-access-tokens" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSToauth-personal-access-tokens"></code></pre>
</div>
<form id="form-POSToauth-personal-access-tokens" data-method="POST" data-path="oauth/personal-access-tokens" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSToauth-personal-access-tokens', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSToauth-personal-access-tokens" onclick="tryItOut('POSToauth-personal-access-tokens');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSToauth-personal-access-tokens" onclick="cancelTryOut('POSToauth-personal-access-tokens');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSToauth-personal-access-tokens" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>oauth/personal-access-tokens</code></b>
</p>
</form>


## Delete the given token.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/id" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/id"
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


<div id="execution-results-DELETEoauth-personal-access-tokens--token_id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEoauth-personal-access-tokens--token_id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEoauth-personal-access-tokens--token_id-"></code></pre>
</div>
<div id="execution-error-DELETEoauth-personal-access-tokens--token_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEoauth-personal-access-tokens--token_id-"></code></pre>
</div>
<form id="form-DELETEoauth-personal-access-tokens--token_id-" data-method="DELETE" data-path="oauth/personal-access-tokens/{token_id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEoauth-personal-access-tokens--token_id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEoauth-personal-access-tokens--token_id-" onclick="tryItOut('DELETEoauth-personal-access-tokens--token_id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEoauth-personal-access-tokens--token_id-" onclick="cancelTryOut('DELETEoauth-personal-access-tokens--token_id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEoauth-personal-access-tokens--token_id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>oauth/personal-access-tokens/{token_id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token_id" data-endpoint="DELETEoauth-personal-access-tokens--token_id-" data-component="url" required  hidden>
<br>
</p>
</form>


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
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
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
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
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## Show the application dashboard.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
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
<div id="execution-results-GEThome" hidden>
    <blockquote>Received response<span id="execution-response-status-GEThome"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GEThome"></code></pre>
</div>
<div id="execution-error-GEThome" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GEThome"></code></pre>
</div>
<form id="form-GEThome" data-method="GET" data-path="home" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GEThome', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GEThome" onclick="tryItOut('GEThome');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GEThome" onclick="cancelTryOut('GEThome');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GEThome" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>home</code></b>
</p>
</form>



