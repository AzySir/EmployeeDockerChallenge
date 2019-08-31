# EmployeeDockerChallenge

## Docker Version Information
```
Docker version 19.03.1, build 74b1e89
docker-compose version 1.24.1, build 4667896b
```

## Pre-requisite 
<li>This runs in a chrome browser as a pre-req to the setup</li>
<li>On Start up the mySQL sometimes is delayed when the containers are spun up. So refresh the page until it works. There will be an unauthorised message</li>

## Setup  
1) Clone Repo
```
git clone https://github.com/AzySir/EmployeeDockerChallenge.git
```

2) Use Commands to spin up service or spin down
<li>Spin Up</li>

```
docker-compose up -d
```

<li>Spin Down</li>

```
docker-compose down
```

3) Whilst service is up visit the below urls

<li>For Application</li>

```
http://localhost:8001
```

<li>For phpmyadmin</li>

```
http://localhost:8002

* host aka server
$host = 'mysql';
$user = 'root';
$pass = 'hello1';
$db = 'employees';

```
