
import axios from "axios";
var data=[];
async function Myfunction()
{
 
  
      axios.get("localhost/hotelbackend/getdata.php").then(res=>{
      
      console.log(res.data);
      data=res.data;
      
    });
  
}
export default data;