# Setting


## Display a listing of the Setting.


GET|HEAD /settings

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/settings"
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
<div id="execution-results-GETapi-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings"></code></pre>
</div>
<div id="execution-error-GETapi-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings"></code></pre>
</div>
<form id="form-GETapi-settings" data-method="GET" data-path="api/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings" onclick="tryItOut('GETapi-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings" onclick="cancelTryOut('GETapi-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings</code></b>
</p>
</form>


## Store a newly created Setting in storage.


POST /settings

> Example request:

```bash
curl -X POST \
    "http://localhost/api/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"sit","value":"veritatis","company_id":3}'

```

```javascript
const url = new URL(
    "http://localhost/api/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "sit",
    "value": "veritatis",
    "company_id": 3
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-settings"></code></pre>
</div>
<div id="execution-error-POSTapi-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-settings"></code></pre>
</div>
<form id="form-POSTapi-settings" data-method="POST" data-path="api/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-settings" onclick="tryItOut('POSTapi-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-settings" onclick="cancelTryOut('POSTapi-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/settings</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="type" data-endpoint="POSTapi-settings" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="value" data-endpoint="POSTapi-settings" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="POSTapi-settings" data-component="body" required  hidden>
<br>
</p>

</form>


## Display the specified Setting.


GET|HEAD /settings/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/settings/voluptatem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/settings/voluptatem"
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
<div id="execution-results-GETapi-settings--setting-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-settings--setting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-settings--setting-"></code></pre>
</div>
<div id="execution-error-GETapi-settings--setting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-settings--setting-"></code></pre>
</div>
<form id="form-GETapi-settings--setting-" data-method="GET" data-path="api/settings/{setting}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-settings--setting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-settings--setting-" onclick="tryItOut('GETapi-settings--setting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-settings--setting-" onclick="cancelTryOut('GETapi-settings--setting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-settings--setting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/settings/{setting}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>setting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting" data-endpoint="GETapi-settings--setting-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update the specified Setting in storage.


PUT/PATCH /settings/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/settings/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type":"ut","value":"odit","company_id":14}'

```

```javascript
const url = new URL(
    "http://localhost/api/settings/minus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type": "ut",
    "value": "odit",
    "company_id": 14
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-settings--setting-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-settings--setting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-settings--setting-"></code></pre>
</div>
<div id="execution-error-PUTapi-settings--setting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-settings--setting-"></code></pre>
</div>
<form id="form-PUTapi-settings--setting-" data-method="PUT" data-path="api/settings/{setting}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-settings--setting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-settings--setting-" onclick="tryItOut('PUTapi-settings--setting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-settings--setting-" onclick="cancelTryOut('PUTapi-settings--setting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-settings--setting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/settings/{setting}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/settings/{setting}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>setting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting" data-endpoint="PUTapi-settings--setting-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="type" data-endpoint="PUTapi-settings--setting-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="value" data-endpoint="PUTapi-settings--setting-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="company_id" data-endpoint="PUTapi-settings--setting-" data-component="body" required  hidden>
<br>
</p>

</form>


## Remove the specified Setting from storage.


DELETE /settings/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/settings/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/settings/molestias"
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


<div id="execution-results-DELETEapi-settings--setting-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-settings--setting-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-settings--setting-"></code></pre>
</div>
<div id="execution-error-DELETEapi-settings--setting-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-settings--setting-"></code></pre>
</div>
<form id="form-DELETEapi-settings--setting-" data-method="DELETE" data-path="api/settings/{setting}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-settings--setting-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-settings--setting-" onclick="tryItOut('DELETEapi-settings--setting-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-settings--setting-" onclick="cancelTryOut('DELETEapi-settings--setting-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-settings--setting-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/settings/{setting}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>setting</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="setting" data-endpoint="DELETEapi-settings--setting-" data-component="url" required  hidden>
<br>
</p>
</form>



