var Alert = React.createClass({displayName: 'Alert',
    getInitialState: function getInitialState() {
        return { count: 1};
    },
    onChange: function(e) {
        this.setState({count: this.state.count + 1});
    },
    render: function() {
        return React.createElement('div', { onClick: this.onChange }, 'Hello, ' + this.state.count,
            React.createElement('strong', null, this.props.name)
        );
    }
});