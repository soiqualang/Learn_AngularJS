# Learn_AngularJS
Learn_AngularJS

`<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>`


*The `ng-app` directive tells AngularJS that the <div> element is the "owner" of an AngularJS application.

*The `ng-model` directive binds the value of the input field to the application variable name.

*The `ng-bind` directive binds the content of the <p> element to the application variable name.

*The `ng-init` directive initializes AngularJS application variables.

```html
<div ng-app="">
bla bla....
</div>
```

## Lưu ý về cộng number

AngularJS sẽ hiểu dấu + là nối chuỗi (concat)

Do vậy:

* Giá trị get được phải `*1` để ép kiểu sang số nếu `input tag` có type là `text`

* Nếu để `input tag` type là `number` thì không cần

---

https://www.w3schools.com/angular/

https://stackoverflow.com/questions/12755558/how-to-sum-two-fields-in-angularjs-and-show-the-result-in-an-label