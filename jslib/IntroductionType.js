function  TypeName(TitleName){
    console.log(TitleName);
    this.Name=TitleName;
    this.TypeOut();

}

TypeName.prototype.TypeOut = function() {
    var that=this;
    $(function () {
        $(".Typed").typed({
            strings: ["Introduction", that.Name],
            typeSpeed: 50
        });
    });
};