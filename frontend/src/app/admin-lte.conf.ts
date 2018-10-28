export const adminLteConf = {
  skin: 'red',
  sidebarLeftMenu: [
    {label: 'MAIN NAVIGATION', separator: true},
    {label: 'Get Started', route: '/', iconClasses: 'fa fa-road', pullRights: [{text: 'New', classes: 'label pull-right bg-green'}]},
    {label: 'COMPONENTS', separator: true},
    {label: 'Form', iconClasses: 'fa fa-files-o', children: [
        {label: 'Input Text', route: 'form/input-text'}
    ]}
  ]
};
