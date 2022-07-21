# Todo API

## Auth

___

### Sign up

| `POST` | api/v1/auth/register |
|--------|---------|

**Parameters:** *None*

**Request Body:**

```json
{
    "name": "Fred",
    "email": "fred@yopmail.com",
    "password": "password"
} 
```

### Sign in

| `POST` | api/v1/auth/login |
|--------|---------|

**Parameters:** *None*

**Request Body:**

```json
{
    "email": "test@mail",
    "password": "password"
}
```

### Sign out

| `POST` | api/v1/auth/logout |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:** *None*

___

## Todo

___

### Get Todos

| `GET` | api/v1/todo |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:** *None*

### Get Todo

| `GET` | api/v1/todo/:id |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:** *None*

### Add Todo

| `POST` | api/v1/todo |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:**

```json
{
    "content": "Todo 1"
}  
```

### Update Todo

| `PUT` | api/v1/todo/:id |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:**

```json
{
    "checked": true, // true or false
    "content": "Update Todo"
}
```

### Delete Todo

| `DELETE` | api/v1/todo/:id |
|--------|---------|

**Headers:**

```js
{
    Authorization: Bearer {token}
}
```

**Parameters:** *None*

**Request Body:** *None*
