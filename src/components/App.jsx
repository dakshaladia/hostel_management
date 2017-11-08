import React from 'react';

/*export default class App extends React.Component {
  render() {
    return (
     <div style={{textAlign: 'center'}}>
        <h1>Hello World From react component</h1>
      </div>);
  }
}*/

 
export default class App extends React.Component {
  render() {
    return (
    <div id="parent">
      <div style={{textAlign:'center'}}>
    <h1>LETS SIGN UP !</h1>
         </div>  
        <div style={{textAlign:'left'}}>
            <h4>Login:</h4>
            <input type="text" value= "" placeholder="Enter e-mail"/>
               
          
         <h4>Password:</h4>
       
          <input type="text" value="" placeholder="Enter password"/>
          <div>
          <input type="button" value="LogIn"/>
         </div>
         </div>
         </div>);
    }
}
       
