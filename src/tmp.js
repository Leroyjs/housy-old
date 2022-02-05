const glob = require("glob");
console.log('HI');

function getEntry() {
  const entry = {};
  glob.sync('resources/views/**/index.js')
    .forEach((file) => {
      const name = file.match(/\/views\/(.+)\/index.js/)[1];
      entry[name] = file;
      console.log(name);
    });
  return entry;
}

getEntry()
