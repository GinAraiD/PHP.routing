import { Link } from '@inertiajs/react';
import './index.css';
export default function Show({ product }) {
    return (
        <div style={{padding : '10px'}}>
            <h1 style={{padding : '10px' , color : 'gray'}}>{product.name}</h1>
            <img src={product.img} alt="" width='500px'/>
            <p>{product.description}</p>
            <p>Price: ${product.price}</p>
            <Link href="/products">Back to All Products</Link>
        </div>
    );
}
