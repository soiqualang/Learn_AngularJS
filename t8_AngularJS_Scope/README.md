# Learn_AngularJS
AngularJS Scope

* The scope is the binding part between the HTML (view) and the JavaScript (controller).

* The scope is an object with the available properties and methods.

* The scope is available for both the view and the controller.


## Root Scope
All applications have a $rootScope which is the scope created on the HTML element that contains the ng-app directive.

The rootScope is available in the entire application.

If a variable has the same name in both the current scope and in the rootScope, the application uses the one in the current scope.

## Note

* scope in controller can't replace rootScope

* rootScope must be declared in `app.run`

```js
app.run(function($rootScope) {
    $rootScope.color = 'blue';
});
```

---
https://www.w3schools.com/angular/angular_scopes.asp

https://www.w3schools.com/angular/