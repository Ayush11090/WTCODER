import React, { Component } from 'react'
import { Card, Table, Image, ButtonGroup, Button } from 'react-bootstrap';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faList, faEdit, faTrash } from '@fortawesome/free-solid-svg-icons'
import { Link } from 'react-router-dom'
import axios from 'axios';
import MyToast from './MyToast'

class BookList extends Component {
    constructor(props) {
        super(props)

        this.state = {
            books: []
        }
    }

    componentDidMount() {
        this.findAllBooks();
    }

    findAllBooks() {
        fetch("http://localhost:8080/api/v1/books")
            .then(response => response.json())
            .then((data) => {
                this.setState({ books: data })
            });
    }

    deleteBook = (bookId) => {
        fetch("http://localhost:8080/api/v1/books/" + bookId, {
            method: 'DELETE'
        })
            .then(response => response.json())
            .then((book) => {
                if (book) {
                    this.setState({ "show": true });
                    setTimeout(() => this.setState({ "show": false }), 3000);
                    this.setState({
                        books: this.state.books.filter(book => book.id !== bookId)
                    });
                } else {
                    this.setState({ "show": false });
                }
            });
    };

    render() {
        return (
            <div>
                <div style={{ "display": this.state.show ? "block" : "none" }}>
                    <MyToast show={this.state.show} message={"Book deleted successfully"} type={"danger"} />
                </div>
                <Card className={"border border-dark bg-black text-white"}>
                    <Card.Body style={{ backgroundColor: 'black' }}><FontAwesomeIcon icon={faList} /> Book List</Card.Body>
                    <Card.Body>
                        <div style={{ maxHeight: '550px', overflowY: 'auto' }}>
                            <Table bordered hover striped variant="light">
                                <thead>
                                    <tr style={{ backgroundColor: 'black', color: 'white' }}>
                                        <th>Book</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {this.state.books.length === 0 ? (
                                        <tr align="center">
                                            <td colSpan="2">No Books Available</td>
                                        </tr>
                                    ) : (
                                        this.state.books.map((book) => (
                                            <tr key={book.id}>
                                                <td style={{ width: '450px' }}>
                                                    <div className="d-flex flex-column align-items-center">
                                                    <img src={book.coverPhotoURL} alt="Book Cover" width="150" height="200" />


                                                        <span>{book.title}</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div className="d-flex flex-column">
                                                        <span><strong>Author:</strong> {book.author}</span>
                                                        <span><strong>ISBN Number:</strong> {book.isbnNumber}</span>
                                                        <span><strong>Language:</strong> {book.language}</span>
                                                        <span><strong>Price:</strong> {book.price}</span>
                                                        <ButtonGroup>
                                                            <Link to={"edit/" + book.id} className="btn btn-sm btn-outline-primary">
                                                                <FontAwesomeIcon icon={faEdit} />
                                                            </Link>
                                                            <Button
                                                                size="sm"
                                                                variant="outline-danger"
                                                                onClick={this.deleteBook.bind(this, book.id)}
                                                            >
                                                                <FontAwesomeIcon icon={faTrash} />
                                                            </Button>
                                                        </ButtonGroup>
                                                    </div>
                                                </td>
                                            </tr>
                                        ))
                                    )}
                                </tbody>
                            </Table>
                        </div>
                    </Card.Body>
                </Card>

            </div>

        )
    }
}

export default BookList
