
    var hes = {a:1, b:2, c:3};
    for (var key in hes){
        console.log(key+":"+hes[key]);
    }
    for (var key in hes){
        if (key = 'a')
        console.log('z');
    }