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
            <p class="codetext">import ReactDOM from 'react-dom';</p>
            <p>This line of code is very similar to line 1.
               Both import JavaScript objects. In both lines, the imported object contains React-related methods.</p>
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
        </div>
        <div class="col-2 panel-headings-left">
            <h3>REACT EXAMPLE</h3>
            <pre>
            <p class="codetext">
import React from 'react';
import ReactDOM from 'react-dom';

class MyComponentClass extends React.Component {
  render() {
    return Hello world;
  }
}
            </p>
            </pre>
        </div>
    </div>
</div> 