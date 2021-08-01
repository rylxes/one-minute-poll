# Endpoints


## counters/increment/{counter}




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/counters/increment/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/counters/increment/labore"
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


> Example response (500):

```json
{
    "message": "Whoops, looks like something went wrong",
    "status": 500
}
```
<div id="execution-results-GETcounters-increment--counter-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcounters-increment--counter-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcounters-increment--counter-"></code></pre>
</div>
<div id="execution-error-GETcounters-increment--counter-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcounters-increment--counter-"></code></pre>
</div>
<form id="form-GETcounters-increment--counter-" data-method="GET" data-path="counters/increment/{counter}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcounters-increment--counter-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcounters-increment--counter-" onclick="tryItOut('GETcounters-increment--counter-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcounters-increment--counter-" onclick="cancelTryOut('GETcounters-increment--counter-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcounters-increment--counter-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>counters/increment/{counter}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>counter</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="counter" data-endpoint="GETcounters-increment--counter-" data-component="url" required  hidden>
<br>

</p>
</form>


## counters/decrement/{counter}




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/counters/decrement/earum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/counters/decrement/earum"
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


> Example response (500):

```json
{
    "message": "Whoops, looks like something went wrong",
    "status": 500
}
```
<div id="execution-results-GETcounters-decrement--counter-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcounters-decrement--counter-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcounters-decrement--counter-"></code></pre>
</div>
<div id="execution-error-GETcounters-decrement--counter-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcounters-decrement--counter-"></code></pre>
</div>
<form id="form-GETcounters-decrement--counter-" data-method="GET" data-path="counters/decrement/{counter}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcounters-decrement--counter-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcounters-decrement--counter-" onclick="tryItOut('GETcounters-decrement--counter-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcounters-decrement--counter-" onclick="cancelTryOut('GETcounters-decrement--counter-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcounters-decrement--counter-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>counters/decrement/{counter}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>counter</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="counter" data-endpoint="GETcounters-decrement--counter-" data-component="url" required  hidden>
<br>

</p>
</form>


## counters/counterable/increment/{counterable}




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/counters/counterable/increment/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/counters/counterable/increment/sint"
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


> Example response (400):

```json
{
    "counter Not Found": true
}
```
<div id="execution-results-GETcounters-counterable-increment--counterable-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcounters-counterable-increment--counterable-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcounters-counterable-increment--counterable-"></code></pre>
</div>
<div id="execution-error-GETcounters-counterable-increment--counterable-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcounters-counterable-increment--counterable-"></code></pre>
</div>
<form id="form-GETcounters-counterable-increment--counterable-" data-method="GET" data-path="counters/counterable/increment/{counterable}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcounters-counterable-increment--counterable-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcounters-counterable-increment--counterable-" onclick="tryItOut('GETcounters-counterable-increment--counterable-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcounters-counterable-increment--counterable-" onclick="cancelTryOut('GETcounters-counterable-increment--counterable-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcounters-counterable-increment--counterable-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>counters/counterable/increment/{counterable}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>counterable</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="counterable" data-endpoint="GETcounters-counterable-increment--counterable-" data-component="url" required  hidden>
<br>

</p>
</form>


## counters/counterable/decrement/{counterable}




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/counters/counterable/decrement/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/counters/counterable/decrement/enim"
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


> Example response (400):

```json
{
    "counter Not Found": true
}
```
<div id="execution-results-GETcounters-counterable-decrement--counterable-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcounters-counterable-decrement--counterable-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcounters-counterable-decrement--counterable-"></code></pre>
</div>
<div id="execution-error-GETcounters-counterable-decrement--counterable-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcounters-counterable-decrement--counterable-"></code></pre>
</div>
<form id="form-GETcounters-counterable-decrement--counterable-" data-method="GET" data-path="counters/counterable/decrement/{counterable}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcounters-counterable-decrement--counterable-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcounters-counterable-decrement--counterable-" onclick="tryItOut('GETcounters-counterable-decrement--counterable-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcounters-counterable-decrement--counterable-" onclick="cancelTryOut('GETcounters-counterable-decrement--counterable-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcounters-counterable-decrement--counterable-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>counters/counterable/decrement/{counterable}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>counterable</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="counterable" data-endpoint="GETcounters-counterable-decrement--counterable-" data-component="url" required  hidden>
<br>

</p>
</form>


## counters




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/counters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/counters"
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


> Example response (200):

```json

<h3>Hello From Counters package</h3>
```
<div id="execution-results-GETcounters" hidden>
    <blockquote>Received response<span id="execution-response-status-GETcounters"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETcounters"></code></pre>
</div>
<div id="execution-error-GETcounters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETcounters"></code></pre>
</div>
<form id="form-GETcounters" data-method="GET" data-path="counters" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETcounters', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETcounters" onclick="tryItOut('GETcounters');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETcounters" onclick="cancelTryOut('GETcounters');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETcounters" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>counters</code></b>
</p>
</form>


## Authorize a client to access the user&#039;s account.




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/authorize"
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
    "http://poll.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/authorize"
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
    "http://poll.loc/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/authorize"
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
    "http://poll.loc/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/token"
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
    -G "http://poll.loc/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/tokens"
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
    "http://poll.loc/oauth/tokens/aperiam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/tokens/aperiam"
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
    "http://poll.loc/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/token/refresh"
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
    -G "http://poll.loc/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/clients"
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
    "http://poll.loc/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/clients"
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
    "http://poll.loc/oauth/clients/qui" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/clients/qui"
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
    "http://poll.loc/oauth/clients/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/clients/assumenda"
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
    -G "http://poll.loc/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/scopes"
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
    -G "http://poll.loc/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/personal-access-tokens"
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
    "http://poll.loc/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/personal-access-tokens"
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
    "http://poll.loc/oauth/personal-access-tokens/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/oauth/personal-access-tokens/et"
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
    -G "http://poll.loc/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/api/user"
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
    -G "http://poll.loc/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/"
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
    -G "http://poll.loc/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/home"
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


## email/verify




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/email/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/email/verify"
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
<div id="execution-results-GETemail-verify" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail-verify"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail-verify"></code></pre>
</div>
<div id="execution-error-GETemail-verify" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail-verify"></code></pre>
</div>
<form id="form-GETemail-verify" data-method="GET" data-path="email/verify" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail-verify', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail-verify" onclick="tryItOut('GETemail-verify');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail-verify" onclick="cancelTryOut('GETemail-verify');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail-verify" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email/verify</code></b>
</p>
</form>


## email/verify/{id}/{hash}




> Example request:

```bash
curl -X GET \
    -G "http://poll.loc/email/verify/consequatur/dolorum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/email/verify/consequatur/dolorum"
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
<div id="execution-results-GETemail-verify--id---hash-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail-verify--id---hash-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail-verify--id---hash-"></code></pre>
</div>
<div id="execution-error-GETemail-verify--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail-verify--id---hash-"></code></pre>
</div>
<form id="form-GETemail-verify--id---hash-" data-method="GET" data-path="email/verify/{id}/{hash}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail-verify--id---hash-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail-verify--id---hash-" onclick="tryItOut('GETemail-verify--id---hash-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail-verify--id---hash-" onclick="cancelTryOut('GETemail-verify--id---hash-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail-verify--id---hash-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email/verify/{id}/{hash}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETemail-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>hash</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="hash" data-endpoint="GETemail-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
</form>


## email/verification-notification




> Example request:

```bash
curl -X POST \
    "http://poll.loc/email/verification-notification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://poll.loc/email/verification-notification"
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


<div id="execution-results-POSTemail-verification-notification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTemail-verification-notification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail-verification-notification"></code></pre>
</div>
<div id="execution-error-POSTemail-verification-notification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail-verification-notification"></code></pre>
</div>
<form id="form-POSTemail-verification-notification" data-method="POST" data-path="email/verification-notification" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTemail-verification-notification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTemail-verification-notification" onclick="tryItOut('POSTemail-verification-notification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTemail-verification-notification" onclick="cancelTryOut('POSTemail-verification-notification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTemail-verification-notification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>email/verification-notification</code></b>
</p>
</form>



