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
constructor(props) {
    super(props);
    this.state = {email:'',password:''};
  
     this.handleChange = this.handleChange.bind(this);
     this.handleSubmit = this.handleSubmit.bind(this);
  }

   handleChange(event) {
    if(event.target.name == "email"){
        this.setState({email:event.target.value});
    }
    else{
        this.setState({password: event.target.value});
    }
  }

  handleSubmit(event) {
    alert('Username:' + this.state.email+' Password '+this.state.password);
    event.preventDefault();
  }
  
  render() {
    return (
    <div id="parent">
      <div style={{textAlign:'center'}}>
    <h1>LETS SIGN UP !</h1>
          <br>
          </br>
          <br>
          </br>
          <br>
          </br>
          <br>
          </br>
          <br>
          </br>
          <br>
          </br>
          <br>
          </br>
          <form onSubmit={this.handleSubmit}>
         
          <label>
          Username:
            <input type="text" name="email" value= {this.state.email} onChange={this.handleChange} placeholder="Enter e-mail"/>
               </label>
               <br>
               </br>
               <label>
               Password:
               <input type="password" name="password" value={this.state.password} onChange={this.handleChange} placeholder="Enter password"/>
               </label>
               <br>
               </br>
               <br>
               </br>
          <input type="submit" value="SignIn" />
      </form>
    </div> 
         </div>);
    }
}
       
  /*  <div style={{textAlign:'left'}}>
            <h4>Username:</h4>
            <input type="text" value= {this.state.value} onChange={this.handleChange} placeholder="Enter e-mail"/>
               
          
         <h4>Password:</h4>
       
          <input type="text" value={this.state.value} onChange={this.handleChange} placeholder="Enter password"/>
          <div>
          <input type="button" value="LogIn"/>
         </div>
         </div>*/
