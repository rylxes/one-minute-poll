# Category


## Display a listing of the Category.


GET|HEAD /categories

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories"
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
{
    "success": true,
    "data": [
        {
            "id": 1,
            "name": "General Opinion",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "name": "Lifestyle",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "name": "Politics",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "name": "Entertainment",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 5,
            "name": "Sports",
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 6,
            "name": "Technology",
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "Categories retrieved successfully"
}
```
<div id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</div>
<div id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</div>
<form id="form-GETapi-categories" data-method="GET" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories" onclick="tryItOut('GETapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories" onclick="cancelTryOut('GETapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories</code></b>
</p>
</form>


## Store a newly created Category in storage.


POST /categories

> Example request:

```bash
curl -X POST \
    "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sint","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sint",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-categories" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-categories"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories"></code></pre>
</div>
<div id="execution-error-POSTapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories"></code></pre>
</div>
<form id="form-POSTapi-categories" data-method="POST" data-path="api/categories" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-categories" onclick="tryItOut('POSTapi-categories');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-categories" onclick="cancelTryOut('POSTapi-categories');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-categories" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/categories</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-categories" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="POSTapi-categories" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="POSTapi-categories" data-component="body"  hidden>
<br>

</p>

</form>


## Display the specified Category.


GET|HEAD /categories/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories/suscipit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories/suscipit"
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


> Example response (404):

```json
{
    "success": false,
    "message": "Category not found"
}
```
<div id="execution-results-GETapi-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--category-"></code></pre>
</div>
<div id="execution-error-GETapi-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--category-"></code></pre>
</div>
<form id="form-GETapi-categories--category-" data-method="GET" data-path="api/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-categories--category-" onclick="tryItOut('GETapi-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-categories--category-" onclick="cancelTryOut('GETapi-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="GETapi-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified Category in storage.


PUT/PATCH /categories/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/categories/accusantium" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"labore","created_at":{},"updated_at":{}}'

```

```javascript
const url = new URL(
    "http://localhost/api/categories/accusantium"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "labore",
    "created_at": {},
    "updated_at": {}
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-PUTapi-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-categories--category-"></code></pre>
</div>
<div id="execution-error-PUTapi-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-categories--category-"></code></pre>
</div>
<form id="form-PUTapi-categories--category-" data-method="PUT" data-path="api/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-categories--category-" onclick="tryItOut('PUTapi-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-categories--category-" onclick="cancelTryOut('PUTapi-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/categories/{category}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="PUTapi-categories--category-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTapi-categories--category-" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>created_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="created_at" data-endpoint="PUTapi-categories--category-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>updated_at</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="updated_at" data-endpoint="PUTapi-categories--category-" data-component="body"  hidden>
<br>

</p>

</form>


## Remove the specified Category from storage.


DELETE /categories/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/categories/totam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/categories/totam"
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


<div id="execution-results-DELETEapi-categories--category-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-categories--category-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-categories--category-"></code></pre>
</div>
<div id="execution-error-DELETEapi-categories--category-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-categories--category-"></code></pre>
</div>
<form id="form-DELETEapi-categories--category-" data-method="DELETE" data-path="api/categories/{category}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-categories--category-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-categories--category-" onclick="tryItOut('DELETEapi-categories--category-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-categories--category-" onclick="cancelTryOut('DELETEapi-categories--category-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-categories--category-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/categories/{category}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>category</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="category" data-endpoint="DELETEapi-categories--category-" data-component="url" required  hidden>
<br>

</p>
</form>



