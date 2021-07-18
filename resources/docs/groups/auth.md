# Auth


## Handle a login request to the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"keira92@example.org","secret":{},"password":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "keira92@example.org",
    "secret": {},
    "password": "aut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>secret</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="secret" data-endpoint="POSTapi-login" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>

</form>


## Log the user out of the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
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


<div id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"></code></pre>
</div>
<div id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout"></code></pre>
</div>
<form id="form-POSTapi-logout" data-method="POST" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-logout" onclick="tryItOut('POSTapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-logout" onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/logout</code></b>
</p>
</form>


## Log the user out of the application.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/logout"
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
    "data": [],
    "message": "Successful Logout"
}
```
<div id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"></code></pre>
</div>
<div id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout"></code></pre>
</div>
<form id="form-GETapi-logout" data-method="GET" data-path="api/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-logout" onclick="tryItOut('GETapi-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-logout" onclick="cancelTryOut('GETapi-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/logout</code></b>
</p>
</form>


## Handle a registration request for the application.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"laborum","last_name":"omnis","company_name":"qui","company_phone":"alias","company_description":"nihil","has2fa":false,"email":"brock39@example.net","password":"accusamus","password_confirmation":"non"}'

```

```javascript
const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "laborum",
    "last_name": "omnis",
    "company_name": "qui",
    "company_phone": "alias",
    "company_description": "nihil",
    "has2fa": false,
    "email": "brock39@example.net",
    "password": "accusamus",
    "password_confirmation": "non"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>company_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>company_phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_phone" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>company_description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="company_description" data-endpoint="POSTapi-register" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>has2fa</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-register" hidden><input type="radio" name="has2fa" value="true" data-endpoint="POSTapi-register" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-register" hidden><input type="radio" name="has2fa" value="false" data-endpoint="POSTapi-register" data-component="body" ><code>false</code></label>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>

</form>


## Display the password reset view for the given token.


If no token is present, display the link request form.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/password/reset/tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password/reset/tenetur"
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
<div id="execution-results-GETapi-password-reset--token-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-password-reset--token-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-password-reset--token-"></code></pre>
</div>
<div id="execution-error-GETapi-password-reset--token-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-password-reset--token-"></code></pre>
</div>
<form id="form-GETapi-password-reset--token-" data-method="GET" data-path="api/password/reset/{token}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-password-reset--token-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-password-reset--token-" onclick="tryItOut('GETapi-password-reset--token-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-password-reset--token-" onclick="cancelTryOut('GETapi-password-reset--token-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-password-reset--token-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/password/reset/{token}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="GETapi-password-reset--token-" data-component="url" required  hidden>
<br>

</p>
</form>


## Confirm the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/password/confirm"
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


<div id="execution-results-POSTapi-password-confirm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-confirm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-confirm"></code></pre>
</div>
<div id="execution-error-POSTapi-password-confirm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-confirm"></code></pre>
</div>
<form id="form-POSTapi-password-confirm" data-method="POST" data-path="api/password/confirm" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-confirm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-confirm" onclick="tryItOut('POSTapi-password-confirm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-confirm" onclick="cancelTryOut('POSTapi-password-confirm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-confirm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/confirm</code></b>
</p>
</form>


## Mark the authenticated user&#039;s email address as verified.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/email/verify/fugit/eveniet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/email/verify/fugit/eveniet"
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
<div id="execution-results-GETapi-email-verify--id---hash-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-email-verify--id---hash-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-email-verify--id---hash-"></code></pre>
</div>
<div id="execution-error-GETapi-email-verify--id---hash-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-email-verify--id---hash-"></code></pre>
</div>
<form id="form-GETapi-email-verify--id---hash-" data-method="GET" data-path="api/email/verify/{id}/{hash}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-email-verify--id---hash-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-email-verify--id---hash-" onclick="tryItOut('GETapi-email-verify--id---hash-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-email-verify--id---hash-" onclick="cancelTryOut('GETapi-email-verify--id---hash-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-email-verify--id---hash-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/email/verify/{id}/{hash}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-email-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>hash</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="hash" data-endpoint="GETapi-email-verify--id---hash-" data-component="url" required  hidden>
<br>

</p>
</form>


## Resend the email verification notification.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/email/resend"
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


<div id="execution-results-POSTapi-email-resend" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-email-resend"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-email-resend"></code></pre>
</div>
<div id="execution-error-POSTapi-email-resend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-email-resend"></code></pre>
</div>
<form id="form-POSTapi-email-resend" data-method="POST" data-path="api/email/resend" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-email-resend', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-email-resend" onclick="tryItOut('POSTapi-email-resend');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-email-resend" onclick="cancelTryOut('POSTapi-email-resend');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-email-resend" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/email/resend</code></b>
</p>
</form>


## Send a reset link to the given user.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/password/sendEmailLink" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"jalyn74@example.com","base_url":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/password/sendEmailLink"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "jalyn74@example.com",
    "base_url": "et"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-sendEmailLink" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-sendEmailLink"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-sendEmailLink"></code></pre>
</div>
<div id="execution-error-POSTapi-password-sendEmailLink" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-sendEmailLink"></code></pre>
</div>
<form id="form-POSTapi-password-sendEmailLink" data-method="POST" data-path="api/password/sendEmailLink" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-sendEmailLink', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-sendEmailLink" onclick="tryItOut('POSTapi-password-sendEmailLink');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-sendEmailLink" onclick="cancelTryOut('POSTapi-password-sendEmailLink');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-sendEmailLink" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/sendEmailLink</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-password-sendEmailLink" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>base_url</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="base_url" data-endpoint="POSTapi-password-sendEmailLink" data-component="body" required  hidden>
<br>

</p>

</form>


## Reset the given user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/password/resetUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"token":"ut","email":"ullrich.grover@example.com","password":"quaerat"}'

```

```javascript
const url = new URL(
    "http://localhost/api/password/resetUser"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "ut",
    "email": "ullrich.grover@example.com",
    "password": "quaerat"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-resetUser" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-resetUser"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-resetUser"></code></pre>
</div>
<div id="execution-error-POSTapi-password-resetUser" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-resetUser"></code></pre>
</div>
<form id="form-POSTapi-password-resetUser" data-method="POST" data-path="api/password/resetUser" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-resetUser', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-resetUser" onclick="tryItOut('POSTapi-password-resetUser');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-resetUser" onclick="cancelTryOut('POSTapi-password-resetUser');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-resetUser" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/resetUser</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-password-resetUser" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-password-resetUser" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-password-resetUser" data-component="body" required  hidden>
<br>

</p>

</form>


## This is used to register an invited user




> Example request:

```bash
curl -X POST \
    "http://localhost/api/registerInvite" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"company_id":"commodi","user_id":{},"is_user":false,"name":"cum","has2fa":false,"email":"gardner.heller@example.net","password":"adipisci","password_confirmation":"numquam"}'

```

```javascript
const url = new URL(
    "http://localhost/api/registerInvite"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "company_id": "commodi",
    "user_id": {},
    "is_user": false,
    "name": "cum",
    "has2fa": false,
    "email": "gardner.heller@example.net",
    "password": "adipisci",
    "password_confirmation": "numquam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-registerInvite" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-registerInvite"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-registerInvite"></code></pre>
</div>
<div id="execution-error-POSTapi-registerInvite" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-registerInvite"></code></pre>
</div>
<form id="form-POSTapi-registerInvite" data-method="POST" data-path="api/registerInvite" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-registerInvite', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-registerInvite" onclick="tryItOut('POSTapi-registerInvite');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-registerInvite" onclick="cancelTryOut('POSTapi-registerInvite');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-registerInvite" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/registerInvite</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>company_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="company_id" data-endpoint="POSTapi-registerInvite" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>user_id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="user_id" data-endpoint="POSTapi-registerInvite" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>is_user</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTapi-registerInvite" hidden><input type="radio" name="is_user" value="true" data-endpoint="POSTapi-registerInvite" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTapi-registerInvite" hidden><input type="radio" name="is_user" value="false" data-endpoint="POSTapi-registerInvite" data-component="body" required ><code>false</code></label>
<br>

</p>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-registerInvite" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>has2fa</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-registerInvite" hidden><input type="radio" name="has2fa" value="true" data-endpoint="POSTapi-registerInvite" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-registerInvite" hidden><input type="radio" name="has2fa" value="false" data-endpoint="POSTapi-registerInvite" data-component="body" ><code>false</code></label>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-registerInvite" data-component="body"  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-registerInvite" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="password" name="password_confirmation" data-endpoint="POSTapi-registerInvite" data-component="body"  hidden>
<br>

</p>

</form>


## Change user&#039;s password.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/password/change" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"berneice96@example.net","old_password":"quod","password":"quis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/password/change"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "berneice96@example.net",
    "old_password": "quod",
    "password": "quis"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-password-change" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-password-change"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-password-change"></code></pre>
</div>
<div id="execution-error-POSTapi-password-change" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-password-change"></code></pre>
</div>
<form id="form-POSTapi-password-change" data-method="POST" data-path="api/password/change" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-password-change', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-password-change" onclick="tryItOut('POSTapi-password-change');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-password-change" onclick="cancelTryOut('POSTapi-password-change');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-password-change" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/password/change</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-password-change" data-component="body" required  hidden>
<br>
The value must be a valid email address.
</p>
<p>
<b><code>old_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="old_password" data-endpoint="POSTapi-password-change" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-password-change" data-component="body" required  hidden>
<br>

</p>

</form>



