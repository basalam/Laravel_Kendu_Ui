/// <reference path="typings/angular2/angular2.d.ts" />
/// <reference path="typings/kendo-ui/kendo-ui.d.ts" />
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") return Reflect.decorate(decorators, target, key, desc);
    switch (arguments.length) {
        case 2: return decorators.reduceRight(function(o, d) { return (d && d(o)) || o; }, target);
        case 3: return decorators.reduceRight(function(o, d) { return (d && d(target, key)), void 0; }, void 0);
        case 4: return decorators.reduceRight(function(o, d) { return (d && d(target, key, o)) || o; }, desc);
    }
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var angular2_1 = require('angular2/angular2');
var angular2_2 = require('kendo/angular2');
var MyAppComponent = (function () {
    function MyAppComponent() {
        this.cap = { color: 1 };
        this.colors = [
            { text: "Black", value: 1 },
            { text: "Orange", value: 2 },
            { text: "Grey", value: 3 }
        ];
        this.dropDownListOptions = {
            dataSource: this.colors
        };
        this.capForm = new angular2_1.ControlGroup({
            color: new angular2_1.Control(2),
            amount: new angular2_1.Control(3)
        });
    }
    MyAppComponent.prototype.formState = function () {
        return JSON.stringify(this.capForm.value);
    };
    MyAppComponent.prototype.preSet = function () {
        this.capForm.controls.color.updateValue(3);
        this.capForm.controls.amount.updateValue(10);
    };
    MyAppComponent = __decorate([
        angular2_1.Component({
            selector: 'my-app'
        }),
        angular2_1.View({
            template: "\n    <form [ng-form-model]='capForm'>\n    <div id=\"cap\"></div>\n    <p>\n        <pre class=\"order-status\">{{ formState() }}</pre>\n    </p>\n\n    <h4 style=\"margin-top: 2em;\">Change Color</h4>\n    <kendo-dropdownlist [options]=\"dropDownListOptions\" data-text-field=\"text\" data-value-field=\"value\" ng-control=\"color\" style=\"text-align: left;\"></kendo-dropdownlist>\n\n    <h4 style=\"margin-top: 2em;\">Change Amount</h4>\n    <kendo-numerictextbox min=\"0\" max=\"10\" format=\"n0\" ng-control=\"amount\"></kendo-numerictextbox>\n\n    <h4 style=\"margin-top: 2em;\">Or just</h4>\n    <button class=\"k-button k-primary\" (click)=\"preSet()\">Help me choose</button>\n    \n    </form>\n    ",
            directives: [angular2_1.FORM_DIRECTIVES, angular2_2.KendoValueAccessor]
        }), 
        __metadata('design:paramtypes', [])
    ], MyAppComponent);
    return MyAppComponent;
})();
angular2_1.bootstrap(MyAppComponent);
