# Learn_AngularJS
Learn_AngularJS

## t1.html - Validate User Input

The ng-model directive adds/removes the following classes, according to the status of the form field:

* ng-empty
* ng-not-empty
* ng-touched
* ng-untouched
* ng-valid
* ng-invalid
* ng-dirty
* ng-pending
* ng-pristine

```css
input.ng-invalid {
    background-color: red;
}
```

### Note

Thứ tự khai báo css cũng có liên quan đến việc thể hiện màu check Validate

```css
input.ng-invalid {
    background-color: red;
}
input.ng-valid{
	background-color: green;
}
input.ng-empty{
	background-color: yellow;
}
```

https://www.w3schools.com/angular/