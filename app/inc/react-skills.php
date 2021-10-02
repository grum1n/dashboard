<div class="right-container" >
    <div class="section-heading">
        <h2>REACT</h2>
        <h3><span>Home</span> / React</h3>
    </div>
    <div class="dashboard-grid-2col">
        <div class="col-1 panel-headings-left">
            <h3>React Getting Started</h3>
            <p>Install Node.js</p>
            <p>1. Command Prompt or  git bash </p>
            <p>2.1. Git Bash: cd folderName (find folder where be installed react)</p>
            <p>2.2. create folder / open / in current folder open Git Bash</p>
            <p>3.1. Git Bash: npm --version (to check node verion)</p>
            <p>3.2. Git Bash: npm --v (to check node verion)</p>
            <p>4.1. Git Bash: npx create-react-app react-task-tracker (create folder and install app)</p>
            <p>4.2. Git Bash: npx create-react-app ./ (install app files in current folder )</p><p>5. cd react-task-tracker ( go to react-task-tracker folder)</p>
            <p>6. Git Bash: code . (means open vs code editor)</p>
            <p>7. VS terminal: npm start (started dev server  , lockalhost:3000)</p>
            <p>8. VS app.js : change content in header section</p>
            <p>9. open package.json </p>
            <p>10. Vs package.json: after "version" add "homepage": "http://grumin.lt/react-test/"</p>
            <p>11. VS terminal: npm run build</p>
            <p>12. in /build/ folder: zip all files name ex.. build</p>
            <p>13. on host server create folder /ex. react-test/</p>
            <p>14. upload build zip to /ex. react-test/</p>
            <p>15. open host server direct admin ../ex. react-test/</p>
            <p>16. extract build.zip in current folder /ex. react-test/</p>
            <p>17. in /ex. react-test/ delete build.zip file</p>
            <p>18. open in browser web page :) "http://grumin.lt/react-test/"</p>
            <p>19. app.js app.css : change content </p>
            <p>20. VS terminal: nmp run build </p>
            <p>21. in /build/ folder: zip all files name ex.. build</p>
            <p>22. upload build zip to /ex. react-test/</p>
            <p>23. extract build.zip in current folder /ex. react-test/</p>
            <p>24. in /ex. react-test/ delete build.zip file</p>
            <p>25. update web page in browser</p>
            <p> ** npm i react-icons</p>
            <p> ** npm install gh-pages</p>
            <p> ** npm run deploy</p>
            <p> ** npm run build && gh-pages -d build</p>


        </div>
        <div class="col-2 panel-headings-left">
            <h3>React Tutorials</h3>
            <p>React is Javascript library for building user interfaces. Created by Facebook.</p>
            <p>React is a tool for building UI components.</p>
            <p>How does React Work? React creates a VIRTUAL DOM in memory.</p>
            <p>React only changes what needs to be changed!</p>
            <p>React finds out what changes have been made, and changes only what needs to be changed.</p>
            <p>* <a href="https://www.youtube.com/watch?v=aQhAmW_I4II" targer="_blank">How to upload react Project to Cpanel</a></p>
            <p>* <a href="https://www.youtube.com/watch?v=w7ejDZ8SWv8&t=742s" target="_blank">React JS Crash Course 2021</a></p>
            <p>* <a href="https://www.w3schools.com/react/react_intro.asp"  target="_blank">React w3school</a></p>
        </div>
    </div>
    <div class="dashboard-grid-2col">
        <div class="col-1 panel-headings-left">
            <h3>React TERMS</h3>
            <p>.help - Print help message</p>
            <p>.break - Sometimes you get stuck, this gets you out</p>
            <p>.clear - Alias for .break</p>
            <p>.editor - Enter the REPL</p>
            <p>.exit - Exit the REPL</p>
            <p>.load - Load JS from a file into yhe REPL session</p>
            <p>.save - Save all evaluated commands in this REPL session to a file</p>
            <p>Ctrl+C - abort current expression</p>
            <p>Ctrl+D - exit the REPL</p>
        </div>
        <div class="col-2 panel-headings-left">
            <h3>React Online Playgrounds</h3>
            <p>* CodePen</p>
            <p>* CodeSandbox</p>
            <p>* Stackblitz</p>
        </div>
    </div>
    <div class="dashboard-grid-2col">
        <div class="col-1 panel-headings-left">
            <h3>LEARN REACT</h3>
            <p class="codetext">import React from 'react';</p>
            <p>This creates an object named React which contains methods necessary to use the React library.</p>
            <p>import React from 'react' </p>
            <p>creates a JavaScript object. This object contains properties that are needed to make React work, such as React.createElement() and React.Component</p>
            <p class="codetext">import ReactDOM from 'react-dom';</p>
            <p>This line of code is very similar to line 1.
               Both import JavaScript objects. In both lines, the imported object contains React-related methods.</p>
            <p>import ReactDOM from 'react-dom' creates another JavaScript object. This object contains methods that help React interact with the DOM, such as ReactDOM.render()</p>
            <p>The methods imported from 'react-dom' are meant for interacting with the DOM. You are already familiar with one of them: ReactDOM.render()</p>
            <p>The methods imported from 'react' don’t deal with the DOM at all. They don’t engage directly with anything that isn’t part of React.</p>
            <p>To clarify: the DOM is used in React applications, but it isn’t part of React. After all, the DOM is also used in countless non-React applications. Methods imported from 'react' are only for pure React purposes, such as creating components or writing JSX elements.</p>
            <p class="codetext">class MyComponentClass extends React.Component {...}</p>
            <p>Here’s another fact about components: we can use a JavaScript class to define a new React component. We can also define components with JavaScript functions, but we’ll focus on class components first</p>
            <p>All class components will have some methods and properties in common. Rather than rewriting those same properties over and over again every time, we extend the Component class from the React library. This way, we can use code that we import from the React library, without having to write it over and over again ourselves.</p>
            <p>After we define our class component, we can use it to render as many instances of that component as we want.</p>
            <p>React.Component is a JavaScript class. To create your own component class, you must subclass React.Component. You can do this by using the syntax:</p>
            <p>class YourComponentNameGoesHere extends React.Component {}</p>
            <p>You know that you are declaring a new component class, which is like a factory for building React components. You know that React.Component is a class, which you must subclass in order to create a component class of your own. You also know that React.Component is a property on the object which was returned by import React from 'react' on line 1.</p>
            <p>Component class variable names must begin with capital letters!</p>
            <p>That name should be written in UpperCamelCase. In this case, your chosen name is MyComponentClass</p>
            <p>Like all JavaScript classes, this one needs a body. The body will act as a set of instructions, explaining to your component class how it should build a React component.</p>
            <p>Here’s what your class body would look like on its own, without the rest of the class declaration syntax</p>
            <pre>
                <p class="codetext">{
  render() {
    return Hello world;
  }
}
                </p>
            </pre>
            <pre>
                <p class="codetext">
class ComponentFactory extends React.Component {
// instructions go here, between the curly braces
}
                </p>
            </pre>
            <p>these instructions should take the form of a class declaration body. That means that they will be delimited by curly braces</p>
            <p>There is only one property that you have to include in your instructions: a render method.</p>
            <p>A render method is a property whose name is render, and whose value is a function. The term “render method” can refer to the entire property, or to just the function part.</p>
            <pre>
                <p class="codetext">
class ComponentFactory extends React.Component {
  render() {}
}
                </p>
            </pre>
            <p>A render method must contain a return statement. Usually, this return statement returns a JSX expression:</p>
            <pre>
                <p class="codetext">
class ComponentFactory extends React.Component {
  render() {
    return &#60;h1&#62;Hello world&#60;/h1&#62;;
  }
}
                </p>
            </pre>
            <p>All you know so far is that its name is render, it needs a return statement for some reason, and you have to include it in the body of your component class declaration.</p>
            <p>So, let’s make a React component! It only takes one more line:</p>
            <pre>
                <p class="codetext">
&#60;MyComponentClass /&#62;
                </p>
            </pre>
            <p>Whenever you make a component, that component inherits all of the methods of its component class. MyComponentClass has one method: MyComponentClass.render(). Therefore, <MyComponentClass /> also has a method named render</p>
            <p>You could make a million different <MyComponentClass /> instances, and each one would inherit this same exact render method.</p>
            <p>To call a component’s render method, you pass that component to ReactDOM.render(). Notice your component, being passed as ReactDOM.render()‘s first argument:</p>
            <pre>
                <p class="codetext">
ReactDOM.render(
    &#60;MyComponentClass /&#62;,
    document.getElementById('app')
);
                </p>
            </pre> 
            <p>ReactDOM.render() will tell <MyComponentClass /> to call its render method.</p> 
            <p><MyComponentClass /> will call its render method, which will return the JSX element <h1>Hello world</h1>. ReactDOM.render() will then take that resulting JSX element, and add it to the virtual DOM. This will make “Hello world” appear on the screen.</p>    
        </div>
        <div class="col-2 panel-headings-left">
            <h3>REACT EXAMPLE</h3>
            <pre>
            <p class="codetext">
import React from 'react';
import ReactDOM from 'react-dom';

class MyComponentClass extends React.Component {
  render() { // render is method
    return Hello world;
  }
}

ReactDOM.render(
  &#60;MyComponentClass /&#62;,
  document.getElementById('app')
);
            </p>
            </pre>
        </div>
    </div>
</div> 