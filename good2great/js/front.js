$("#closeContent,#contentCloseBottom").on("click", function(event){
    event.preventDefault();
    history.back(1);
});
