<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>DOC</title>
  </head>
  <body>

    <h1>Documentation</h1>

    <h2>General Information</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Laravel Version</td>
          <td>5.6</td>
        </tr>
        <tr>
          <td>Base Framework</td>
          <td>Bootstrap</td>
        </tr>
        <tr>
          <td>Bootstrap Version</td>
          <td>4.1.1</td>
        </tr>
      </tbody>
    </table>

    <ul>
      <li>Has /doc route, which contains information about the project.</li>
    </ul>

    <h2>Website Information</h2>
    <table>
      <thead>
      </thead>
      <tbody>
        <tr>
          <td>Has planner-system style on all pages.</td>
          <td>planner-system.css, planner-system.min.css</td>
        </tr>
      </tbody>
    </table>

    <h2>Tables</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Table Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Users</td>
          <td>users</td>
          <td>Users table is needed.</td>
        </tr>
        <tr>
          <td>Plans</td>
          <td>plans</td>
          <td>Plans table is needed.</td>
        </tr>
      </tbody>
    </table>

    <h2>Routes</h2>
    <table>
      <thead>
        <tr>
          <th>Route</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>/</td>
          <td>Contains home view.</td>
        </tr>
        <tr>
          <td>/doc</td>
          <td>Contains information about the project.</td>
        </tr>
        <tr>
          <td>/plan/:plan_id</td>
          <td>Contains the single plan view.</td>
        </tr>
        <tr>
          <td>/plan/create</td>
          <td>Contains the plan creation form, which POSTS to /plan/store route.</td>
        </tr>
        <tr>
          <td>/plan/store</td>
          <td>Store new plan in the database.</td>
        </tr>
        <tr>
          <td>/user/login</td>
          <td>User can log into account.</td>
        </tr>
        <tr>
          <td>/user/register</td>
          <td>User Registration form.</td>
        </tr>
        <tr>
          <td>/user/store</td>
          <td>Store user in the database.</td>
        </tr>
      </tbody>
    </table>

    <h2>Shared Components</h2>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Navbar</td>
          <td>Contains /, user/login (home, login) route</td>
        </tr>
      </tbody>
    </table>

    <h2>Development Resources</h2>
    <table>
      <thead>
      </thead>
      <tbody>
        <tr>
          <td>Icons</td>
        </tr>
      </tbody>
    </table>

    <h2>Concepts</h2>
    <table>
      <thead>

      </thead>
      <tbody>
        <tr>
          <td>How to create a controller.</td>
        </tr>
        <tr>
          <td>How to use laravel routing.</td>
          <td><a href="https://laravel.com/docs/5.6/routing">Link</a></td>
        </tr>
      </tbody>
    </table>

  </body>
</html>
