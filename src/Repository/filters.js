/**window.onload=()=>
{
    const FiltersForm=document.querySelector("filters");
    document.querySelectorAll("filters input").forEach(input =>{
        input.addEventListener("change",()=>{
            const Form=new FormData(FiltersForm);

            const Params=new URLSearchParams();
            Form.forEach(((value, key) => {
              console.log(Form);
              Params.append(key,value);

          });
             const url=new URL(window.location.href);
             fetch(url.pathname+ "?" + Params.toString(),{
                 headers:{"x-Requested-with":"XMLHttpRequest"}
             }).then(response =>)
        }).catch(e=> alert(e));
      });
    });
}*/