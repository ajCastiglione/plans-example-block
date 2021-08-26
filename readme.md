## `npm start`
- Use to compile and run the block in development mode.
- Watches for any changes and reports back any errors in your code.

## `npm run build`
- Use to build production code for your block inside `dist` folder.
- Runs once and reports back the gzip file sizes of the produced code.

## `npm run eject`
- Use to eject your plugin out of `create-guten-block`.
- Provides all the configurations so you can customize the project as you want.
- It's a one-way street, `eject` and you have to maintain everything yourself.
- You don't normally have to `eject` a project because by ejecting you lose the connection with `create-guten-block` and from there onwards you have to update and maintain all the dependencies on your own.

----

# React App Portion

Located in `/src/block/reactapp`.

## `npm start`
- Starts the local development build of the react app. Live reloads changes.

## `npm run build`
- Creates an optimized build of the react app and places it into the dist folder. Must run build command for the block before running the build command for this application.
