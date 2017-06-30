slugTracker.controller('issueDescriptionController', function () {
    var issueDescription = this;

    issueDescription.init = function () {
        issueDescription.issueObj = {
            projectName: 'HIGI',
            type: {
                iconUrl: './svg/task.svg',
                type: 'Task',
            },
            name: 'HC-1020',
            heading : 'Web portal: mitigate risk of a XSS attack',
            priority:'Major',
            status:{
                code:1,
                text:'Open',
                color:'grey'
            },
            fixVersion:'v1.1',
            sprint:1,
            platform:'Web',
            assignee:{
              name:'Lokeswara Sane',
              iconUrl:''
            },
            acceptenceCriteria:`Lorem Ipsum is simply 
                                dummy text of the printing
                                and typesetting industry. 
                                Lorem Ipsum has been the industry's 
                                standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of
                                type and scrambled it to make a type specimen 
                                book. It has survived not only five centuries, 
                                but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was 
                                popularised in the 1960s with the 
                                release of Letraset sheets containing 
                                Lorem Ipsum passages, and more recently 
                                with desktop publishing software like 
                                Aldus PageMaker including versions of Lorem Ipsum`,
            reporter:'HIGI Team',
            watchers:[
                {
                    name:'User 1',
                    id:'random String'
                },
                {
                    name:'User 1',
                    id:'random String'
                },
            ],
            progress: 0
        };
        $('#issueProgress').progress({
            percent: issueDescription.issueObj.progress
        });

    };
    issueDescription.init();
})