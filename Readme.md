# PHP-MVC

```mermaid

flowchart TB
    Model -- sends up-to-date Data --> Controller
    Controller -- sends to-be-updated Data/-Structure --> Model
    View -- sends data from User --> Controller
    Controller -- updates View/User-Interface --> View 

```

Model
: Models can be found in app/models dir.

Controller
: Controllers can be found in app/controllers dir.

View
: Views can be found in resources/views dir.

## Links

[Mozilla](https://developer.mozilla.org/en-US/docs/Glossary/MVC)
