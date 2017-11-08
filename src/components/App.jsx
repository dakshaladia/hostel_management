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
    this.state = {value: ''};
  
     this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
    
  }
   handleChange(event) {
    this.setState({value: event.target.value});
  }

  handleSubmit(event) {
    alert('Username:' + this.state.value);
 
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
          <form onSubmit={this.handleSubmitt}>
          <form onSubmit={this.handleSubmit}>
         
          <label>
          Username:
            <input type="text" value= {this.state.value} onChange={this.handleChange} placeholder="Enter e-mail"/>
               </label>
               <br>
               </br>
               <label>
               Password:
               <input type="text" value={this.state.value} onChange={this.handleChangee} placeholder="Enter password"/>
               </label>
               <br>
               </br>
               <br>
               </br>
          <input type="submit" value="SignIn" />
      </form>
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
